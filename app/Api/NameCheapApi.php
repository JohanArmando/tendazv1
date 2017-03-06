<?php
/**
 * Created by PhpStorm.
 * User: johan
 * Date: 12/07/2016
 * Time: 9:45 AM
 */

namespace Tendaz\Api;


use anlutro\cURL\cURL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Tendaz\Models\Domain\Tld;

/**
 * Class NameCheapApi
 * @package Tendaz\APIS
 */
class NameCheapApi
{
    /**
     * @var
     */
    protected  static $nameCheapApiKey;
    /**
     * @var
     */
    protected  static $nameCheapUserKey;
    /**
     * @var
     */
    protected  static $url;
    /**
     * @var
     */
    protected  static $clientIp;
    /**
     * @var
     */
    protected static $response;

    /**
     *
     */
    public function __construct(){
        $this->curl = new cURL();
        $this->shop = 'algo';
        $this->user = 'juan';
        $this->ssd = '';
        $this->tld = '';
        $this->domain = '';
        $this->tlds = array('.cheap','.us', '.eu', '.ca', '.co.uk', '.org.uk', '.me.uk', '.nu' , '.asia', '.com.au', '.net.au', '.org.au', '.es', '.nom.es', '.com.es', '.org.es', '.de', '.fr');
    }
    /**
     * @return mixed
     */
    public function getNameCheapKey(){
            return static::$nameCheapApiKey ?: Config::get('nameCheap.NAMECHEAP.api_key');
    }

    /**
     * @param $key
     */
    public function setNameCheapKey($key){
        static::$nameCheapApiKey = $key;
    }

    /**
     * @return mixed
     */
    public function getNameCheapUser(){
        return static::$nameCheapUserKey ?: Config::get('nameCheap.NAMECHEAP.api_user');
    }

    /**
     * @param $key
     */
    public function setNameCheapUser($key){
        static::$nameCheapUserKey = $key;
    }

    /**
     * @return mixed
     */
    public function getNameCheapUrl(){
        return static::$nameCheapUserKey ?: Config::get('nameCheap.NAMECHEAP.url');
    }

    /**
     * @param $key
     */
    public function setNameCheapUrl($key){
        static::$url = $key;
    }

    /**
     * @return array
     */
    public function getDataBasicRequest(){
        return $data = array('ApiUser' => $this->getNameCheapUser() ,
                            'ApiKey' => $this->getNameCheapKey() ,
                            'UserName' => $this->getNameCheapUser(),
                            'ClientIp' => $this->getClientIp());
    }

    /**
     * @param $key
     */
    public function setClientIp($key){
        static::$clientIp = $key;
    }

    /**
     * @return mixed
     */
    public function getClientIp(){
        return static::$clientIp;
    }

    /**
     * @param $response
     */
    public function setResponse($response){
        static::$response = $response;
    }

    /**
     * @return mixed
     */
    public function getResponse(){
        return static::$response;
    }

    /**
     * @param $data
     * @return string
     */
    public function buildDomain($data){
        $url = $this->curl->buildUrl( $this->getNameCheapUrl() ,$data);
        return $url;
    }
    /**
     * @param $domain
     */
    public function checkDomain($domain){
        $data = $this->getDataBasicRequest();
        $data['command'] = 'namecheap.domains.check';
        $data['DomainList'] = $domain;
        $url = $this->buildDomain($data);
        $response = $this->curl->get($url);
        $this->setResponse($response);
    }

    /**
     * @return mixed
     */
    public function toResponse(){
        $xml = simplexml_load_string(static::$response);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return $array;
    }

    /**
     * @param $json
     * @param $tlds
     * @param $domain
     * @return \Illuminate\Http\JsonResponse
     */
    public function suggestions($json , $tlds , $domain){
        $array = array();
        list($start , $end) = explode('.' , $domain);
        $tld = Tld::where('name' ,'.'.$end)->first();
        if($json['@attributes']['Status'] == 'ERROR' || $json['CommandResponse']['DomainCheckResult']['@attributes']['Available'] == 'false'){
            foreach($tlds as $key => $tld){
                $this->checkDomain($start.$tld);
                $this->getResponse();
                $array[$key] = $this->toResponse();
            }
            return ['available' => false , $array];
        }else{
            return ['available' => true , $json ,'tld' => $tld , 'domain'=>  $domain , 'sid' => env('2CHECK_SID') , 'user' => $this->user , 'shop' => $this->shop];
        }
    }

    /**
     * @return string
     */
    public function getPhone(){
        $phone =  '+';
        !empty($this->shop->phone_country) ? $phone .= $this->shop->phone_country :  $phone .= '57';
        $phone .= '.';
        !empty($this->shop->phone_number) ? $phone .= $this->shop->phone_number :  $phone .= env('PHONE_NAME');
        return $phone;
    }

    /**
     * @param $tld
     * @return mixed
     */
    public function getExtendecAttribute($tld){
        $extended =  array(
            '.US' => ['RegistrantNexusCountry' => 'CO' , 'RegistrantNexus' => 'C32' , 'RegistrantPurpose' => 'P1'],
            '.EU' => ['EUAgreeWhoisPolicy' => 'YES' , 'EUAgreeDeletePolicy' => 'YES'],
            '.CA' => ['CIRALegalType' => 'CCT' , 'CIRAWhoisDisplay' => 'Private' , 'CIRAAgreementVersion' => '2.0' , 'CIRAAgreementValue' => 'Y'],
            '.CO.UK  ' => ['COUKLegalType' => 'IND' , 'COUKRegisteredfor' => 'TENDAZ'],
            '.NU' => ['NUOrgNo' => !empty($this->user->cedula) ? $this->user->cedula : '1027678567'],
        );
        return $extended[strtoupper($tld)];
    }

    /**
     * @param $array
     * @return string
     */
    public function createUrl($array){
         $data = array();
        $data = $this->getDataBasicRequest();
        list($ssd , $tld ) = explode('.' , $array['_domain_name']);
        $this->ssd = $ssd ;
        $this->tld = $tld ;
            if(in_array('.'.$tld , $this->tlds)){
                $arr = $this->getExtendecAttribute('.'.$tld);
                foreach($arr as $key => $value){
                    $data[$key] = $value;
                }
            };
            //DOMAIN DATA
         $data['command'] = 'namecheap.domains.create';
         $data['DomainName'] = $array['_domain_name'];
         $this->domain = $array['_domain_name'];
         $data['Years'] = 1;
            //AUX DATA
         $data['AuxBillingFirstName'] = $array['name'];
         $data['AuxBillingLastName'] = $array['name_last'];
         $data['AuxBillingAddress1'] = $array['address']  ? $array['address'] : 'carrera 58 numero 137a-28' ;
         $data['AuxBillingStateProvince'] = $array['state'];
         $data['AuxBillingPostalCode'] = $array['zip']  ? $array['zip'] : '111461' ;
         $data['AuxBillingCountry'] = 'CO';
         $data['AuxBillingPhone'] = $this->getPhone();
         $data['AuxBillingEmailAddress'] = env('EMAIL_NAMECHEAP');
        if($tld != 'CA'){
            $data['AuxBillingOrganizationName'] = 'TENDAZ';
        }
         $data['AuxBillingCity'] = $array['city'];
            //TECH DATA
        $data['TechFirstName'] = 'Tendaz';
        $data['TechLastName'] = 'Colombia';
        $data['TechAddress1'] = 'Calle 138';
        $data['TechStateProvince'] = 'Bogota';
        $data['TechPostalCode'] = '111461';
        $data['TechCountry'] = 'CO';
        $data['TechPhone'] = '+57.'.env('PHONE_NAME');
        $data['TechEmailAddress'] = env('EMAIL_NAMECHEAP');
        if($tld != 'CA') {
            $data['TechOrganizationName'] = 'TENDAZ';
        }
        $data['TechCity'] = 'Bogota';
            //ADMIN DATA
        $data['AdminFirstName'] = 'Tendaz';
        $data['AdminLastName'] = 'Colombia';
        $data['AdminAddress1'] = 'Calle 138';
        $data['AdminStateProvince'] = 'Bogota';
        $data['AdminPostalCode'] = '111461';
        $data['AdminCountry'] = 'CO';
        $data['AdminPhone'] = '+57.'.env('PHONE_NAME');
        $data['AdminEmailAddress'] = env('EMAIL_NAMECHEAP');
        if($tld != 'CA') {
            $data['AdminOrganizationName'] = 'TENDAZ';
        }
        $data['AdminCity'] = 'Bogota';
            //REGISTRAN DATA
        $data['RegistrantFirstName'] = $array['name'];
        $data['RegistrantLastName'] = $array['name_last'];
        $data['RegistrantAddress1'] = $array['address'] ? $array['address'] : 'carrera 58 numero 137a-28';
        $data['RegistrantStateProvince'] = $array['state'];
        $data['RegistrantPostalCode'] = $array['zip'] ? $array['zip'] : '111461' ;
        $data['RegistrantCountry'] = 'CO';
        $data['RegistrantPhone'] = $this->getPhone();
        $data['RegistrantEmailAddress'] = env('EMAIL_NAMECHEAP');
        if($tld != 'CA') {
            $data['RegistrantOrganizationName'] = 'TENDAZ';
        }
        $data['RegistrantCity'] = $array['city'];
        $url = $this->buildDomain($data);
        return $url;
    }

    /**
     * @param $url
     */
    public function create($url){
        $response = $this->curl->get($url);
        $this->setResponse($response);
        $response = $this->tryError();
        return $response;
    }

    /**
     * @param $error
     * @param $domain
     */
    public function senEmail($error , $domain){
        $user = $this->user;
        Mail::send('admin.emails.domainCreate', ['user' => $this->user , 'error' => $error , 'domain' => $domain], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');
            $m->to($user->email, $user->full_name)->subject('Dominio creado!');
        });
    }

    /**
     * @return bool|string
     */
    public function tryError($host = null){
        $response = $this->toResponse();
        if($host){
            if($response['@attributes']['Status'] == 'OK'){
               return true;
            }else{
                if(!isset($response['Errors']['Number'])){
                    return  ['error-host' => $response['Errors']['error']];
                }else{
                    $error = $this->catchError($response['Errors']['Number']);
                    return ['error-host' => $error];
                }
            }
        }
        $domain = $this->domain;
        if($response['@attributes']['Status'] == 'OK'){
            $error  = 'NONE';
            $this->senEmail($error , $domain);
            $this->createHost();
        }else{
            $error  = 'YES';
            $this->senEmail($error , $domain);
            if(!isset($response['Errors']['Number'])){
                return  ['error' => $response['Errors']['Error']];
            }else{
                $error = $this->catchError($response['Errors']['Number']);
                return ['error' => $error];
            }
        }
    }

    /**
     * @param $code
     * @return mixed
     */
    public function catchError($code){
        $errors = array(
        '2033409' => 'Es posible que un error lógico en la fase de autenticación. no se encuentra el nombre de usuario para el cargo fin',
        '2033407' => 'No se puede habilitar cuando WhoisGuard AddWhoisguard está configurado como NO',
        '2033270' => 'No se puede habilitar cuando WhoisGuard AddWhoisguard está configurado como NO',
        '2015267' => 'opción EUAgreeDelete no se debe establecer como NO',
        '2011170' => 'Error de validación de PromotionCode',
        '2015182' => 'El teléfono de contacto es válido. El formato de número de teléfono es + NNN.NNNNNNNNNN',
        '2011280' => 'Error de validación de dominio de primer nivel',
        '2015167' => 'Error de validación de Años',
        '2030280' => 'TLD no es compatible con la API',
        '2011168' => 'Los servidores de nombres no son válidos',
        '2011322' => 'atributos extendidos no son válidos',
        '2010323' => 'Comprobar campo requerido para los contactos del dominio de facturación',
        '2528166' => 'creación de la orden no pudo',
        '3019166' => 'dominio no disponible',
        '4019166' => 'dominio no disponible',
        '3031166' => 'Error al obtener la información del proveedor',
        '3028166' => 'Error de Enom (Errcount <> 0)',
        '3031900' => 'Respuesta desconocida del proveedor',
        '4023271' => 'Error al tiempo que añade ssl libre positiva para el dominio',
        '3031166' => 'Error al obtener el estado de Domin Enom',
        '4023166' => 'Error al tiempo que añade dominio',
        '5050900' => 'Error desconocido al tiempo que añade a su cuenta de dominio',
        '4026312' => 'Error en los fondos de refinanciamiento',
        '5026900' => 'Desconocido excepciones error al reembolso de los fondos',
        '3031510' => 'respuesta errónea de Enom cuando el recuento de errores! = 0',
        '3011511' => 'respuesta desconocida del Proveedor',
        '2019166' => 'dominio no encontrado',
        '2016166' => 'dominio no está asociada con su cuenta No se admite ',
        '2030166' =>  'permiso de edición para el dominio',
        '3013288' =>  'Demasiados registros',
        '3031510' =>  'Error De Enom cuando ERRORCOUNT <> 0',
        '3050900' =>  'Error desconocido del Enom',
        '4022288' =>  'No se puede obtener la lista de servidores de nombres'
        );
        return $errors[$code];
    }

    /**
     *
     */
    public function createHost(){
        $data = $this->getDataBasicRequest();
        $data['command'] = 'namecheap.domains.dns.setHosts';
        $data['SLD'] = $this->ssd;
        $data['TLD'] = $this->tld;
        $data['HostName1'] = $this->ssd.'.'.$this->tld.'.tendaz.com';
        $data['RecordType1'] = 'A';
        $data['Address1'] = env('IP_HOST_NAME');
        $data['HostName2'] = 'www.'.$this->ssd.'.'.$this->tld;
        $data['RecordType2'] = 'CNAME';
        $data['Address2'] = $this->ssd.'.'.$this->tld;
        $url = $this->buildDomain($data);
        $response = $this->curl->get($url);
        $this->setResponse($response);
        $this->tryError(true);
    }

}