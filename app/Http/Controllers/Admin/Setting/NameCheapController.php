<?php

namespace Tendaz\Http\Controllers\Admin\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Tendaz\Api\NameCheapApi;
use Tendaz\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Tendaz\Models\Domain\Domain;
use Tendaz\Models\Domain\Tld;


class NameCheapController extends Controller
{

    /**
     *Get data
     */
    public function __construct(){
        $this->ip = env('IP');
        $this->adapter = new NameCheapApi();
        $this->adapter->setClientIp(env('IP_CLIENT'));
    }

    /**
     * @param Route $route
     */
    public function findDomain(Route $route){
        $uuid = $route->getParameter('account');
        $this->domain = Domain::where('uuid','=',$uuid)->first();
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function getIndex($subdomain , Request $request){
        $domains = Domain::where('shop_id',$request->shop->id)->get();
        $tlds = Cache::get('tlds');
        if(!$tlds)
            $tlds = Tld::all();
        Cache::put('tlds' , $tlds , 1440);
        return view('admin.setting.domain' , compact('domains', 'tlds'));
    }

    public function store($subdomain, Request $request)
    {
         $dom = ['edit',$request->get('domain')];
         Domain::create([
            'domain' => $dom,
            'name' => $dom,
            'ssl' => $dom,
            'shop_id' => $request->shop->id
         ]);

        return redirect()->back()->with('message', array('type' => 'success', 'message' => 'El dominio ' . $request->get('domain') . '  fue agregado correctamente!'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDelete(){
        if($this->domain) {
            if($this->domain->principal){
                Session::flash('message', array('type' => 'warning', 'message' => ' el dominio ' . $this->domain->name . ' principal no se puede eliminar'));
                return redirect()->back();
            }
            $delete = $this->domain->delete();
            $delete ?
                Session::flash('message', array('type' => 'success', 'message' => 'Dominio ' . $this->domain->name . ' eliminado. Si deseas recuperarlo comunicate con nosotros.'))
                : Session::flash('message', array('type' => 'warning', 'message' => ' el dominio ' . $this->domain->name . ' no pudo ser eliminado'));
        }
        return redirect()->back();
    }

    /**
     *
     */
    public function notPrincipal(){
        foreach($this->domains as $domain){
            $domain->principal = 0;
            $domain->save();
        }
    }

    /**
     * @param $url
     * @return bool
     */
    public function curlDNS($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if($httpcode >= 200 && $httpcode < 300){
            $exist = true;
        } else {
            $exist = false;
        }
        return $httpcode;
    }

    /**
     * @return $this
     */
    public function getVerify($subdomain , Request $request)
    {
        $domain = Domain::where('shop_id',$request->shop->id)->where('main',1)->first();
        if($domain) {
            return view('admin.setting.verify_domain',compact('domain'));
        }
    }
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postVerify(){
        dd('aca');
        if($this->domain){
            $url = $this->domain->name;
            if($url == NULL) return false;
            $exist = $this->curlDNS($url);
            $exist ?  $ip = gethostbyname($url) : $ip = false;
            $ip && $ip == $this->ip ? $goodDns =  true : $goodDns =  false ;
            if($goodDns){
                $this->domain->status_id = 3;
            }else{
                $this->domain->status_id = 2;
            }
            $this->domain->save();
        }
            return response()->json($this->domain->status->code);
    }

    /**
     * Create domain exist not buy
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postDomain(DomainCreateRequest $request){
        if($request->ajax()){
                $data = array('name' => $request->get('subDomain') , 'shop_id' => $this->shop->id );
            if($request->get('www') == 0){
                $domain = Domain::create(['name' =>$request->get('domain') , 'shop_id' => $this->shop->id , 'status_id' =>  2]);
                Domain::create(['name' => 'www.'.$request->get('domain') , 'shop_id' => $this->shop->id , 'domain_id' => $domain->id , 'status_id' =>  2]);
            }else{
                Domain::create($data);
            }
            $domains = Domain::where('principal','<>',1)->get();
            return response()->json(['true' ,$domains]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkDomain(Request $request){
        if($request->ajax()){
            $this->adapter->checkDomain($request->get('domain'));
            $this->adapter->getResponse();
            $json = $this->adapter->toResponse();
            $tlds = $request->get('tld');
            $response = $this->adapter->suggestions($json , $tlds , $request->get('domain') );
            Cache::put($this->user->uuid.'_expire_domain' , 1 ,30);
            return response()->json($response);
        }
    }

    public function singleCharge($tld , $request){
        if(!$this->user->subscribed()){
            $this->user->subscription('domain')->create($request['token'] , [
                'email' => $this->user->email,
            ]);
            $this->user->card = $request['cardNumber'];
            $this->user->exp = $request['cardExpiry'];
            $this->user->cvc = $request['cardCVC'];
            $this->user->finish_free = $this->user->finish_free;
            $this->user->save();
        }
        $charge = $this->user->charge(intval($tld->price * 100), [
                'receipt_email' => $this->user->email,
            ]);
        return $charge;
    }
    public function getDomain(Request $request){
        $expired = Cookie::get('_expire_domain');
        if($expired){
            $tld = Tld::where('uuid' , $request->get('_uuid_name'))->first();
            $charge = $this->singleCharge($tld , $request->all());
            if($charge){
                $url = $this->adapter->createUrl($request->except(['_token' , 'token']));
                $response = $this->adapter->create($url);
                if(isset($response['error'])){
                    return redirect()->back()->with('message',array('type' => 'warning' , 'message' => $response['error']));
                }else{
                    $response = $this->adapter->toResponse();
                    if(isset($response['has-error'])){
                        $domain = Domain::create(['name' => $request->get('_domain_name') , 'shop_id' => $this->shop->id , 'status_id' => 5 ]);
                        Domain::create(['name' => 'www.'.$request->get('_domain_name') , 'shop_id' => $this->shop->id ,'status_id' => 5  ,  'domain_id' => $domain->id]);
                        return redirect()->back()->with('meesage',array('type' => 'info' , 'message' => 'Se creo el dominio pero no el host error:'.$response['error-host']));
                    }
                    $domain = Domain::create(['name' => $request->get('_domain_name') , 'shop_id' => $this->shop->id , 'status_id' => 3]);
                    Domain::create(['name' => 'www.'.$request->get('_domain_name') , 'shop_id' => $this->shop->id , 'domain_id' => $domain->id ,   'status_id' => 3]);
                    return redirect()->to('admin/configuration/domain')->with('message',array('type' => 'info' , 'message' => 'Dominio creado y apuntado correctamente. Disfruta de tu tienda personalizada'));
                }
            }else{
                return redirect()->back()->with('message',array('type' => 'warning' , 'message' => 'No se pudo cargar la compra a tu tarjeta de credito'));
            }
        }else{
            return redirect()->to('https://'.$this->user->shop->principalDomain->name.'/admin/configuration/domain')
                ->with('message',array('type' => 'warning' , 'message' => 'El tiempo de session de compra de tu dominio ha expirado'));
        }
        //no olvidar crear el dominio en nginx
    }

    public function  postHost(){

    }
}
