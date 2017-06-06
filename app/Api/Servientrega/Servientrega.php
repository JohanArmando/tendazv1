<?php
    namespace Tendaz\Api\Servientrega;
    
    /**
    *   Servicio servientrega para consumir el soap
    */
    class Servientrega
    {
        protected $client;
        
        function __construct($login = '', $pwd = '', $Id_CodFacturacion = '', $Nombre_Cargue = '')
        {
            $this->client = new \SoapClient(env('SERVIENTREGA_SOAP', 'http://web.servientrega.com:8081/GeneracionGuias.asmx?WSDL'));
            $auth = [
                'login'=> $login,                            //'testtendaz',
                'pwd'=> $pwd,                                //'Colombia1',
                'Id_CodFacturacion'=> $Id_CodFacturacion,    //'SER408',
                'Nombre_Cargue'=> $Nombre_Cargue,            //'Test Tendaz',
            ];
            $header = new \SoapHeader('http://web.servientrega.com','AuthHeader2',$auth);
            $this->client->__setSoapHeaders($header);
        }

        public function EncriptarContrasena($password='')
        {
            $requestParams = ['strcontrasena' => $password];
            $response = $this->client->EncriptarContrasena($requestParams);
            return $response->EncriptarContrasenaResult;
        }

        public function DesencriptarContrasena($password='')
        {
            $requestParams = ['strcontrasenaEncriptada' => $password];
            $response = $this->client->DesencriptarContrasena($requestParams);
            return $response->DesencriptarContrasenaResult;
        }

        public function CrearGuia($value='')
        {

            $envio = [
                'Num_Sobreporte'                         => 0,                                        //Opcional
                //'Num_CajaSobrePorte'                     => 1234567,                                  //Opcional
                //'DocRelacionado'                         => 800107584,                                //Opcional
                'Num_Piezas'                             => 5,                                        //Obligatorio
                'Ide_Destinatarios'                      => '126523555',
                'Ide_Manifiesto'                         => '125632365',
                'Des_TipoTrayecto'                       => 1,                                        //Obligatorio 1) nacional 2) internacional
                'Ide_Producto'                           => '6 industrial',                           //Obligatorio
                'Des_FormaPago'                          => 2,                                        //Obligatorio
                'Des_MedioTransporte'                    => 1,                                        //Obligatorio
                'Num_PesoTotal'                          => 3,                                        //Obligatorio
                'Num_ValorDeclaradoTotal'                => 500,                                      //Obligatorio
                'Num_VolumenTotal'                       => 0,                                        //Obligatorio
                'Num_BolsaSeguridad'                     => 0,                                        //Obligatorio
                'Num_Precinto'                           => 0,                                        //Opcional
                'Des_TipoDuracionTrayecto'               => 2,                                        //Obligatorio  1 (Normal) 2 (Hoy mismo),3 (Cero horas),4 (48 horas),5 (72 horas)
                'Des_Telefono'                           => '7001515',                                //Obligatorio  
                'Des_Ciudad'                             => 'Bogota',                                 //Obligatorio  
                'Des_Direccion'                          => 'Calle 6 no 34a 11',                      //Obligatorio  
                'Nom_Contacto'                           => 'Camilo Perez',                           //Obligatorio  
                //'Des_VirCampoPersonalizado1'             => 'Fac 45675',                              //Opcional
                'Num_ValorLiquidado'                     => 0,                                        //Obligatorio  
                'Des_DiceContener'                       => 'Documento',                              //Obligatorio  
                'Des_TipoGuia'                           => 1,                                        //Obligatorio  
                'Num_VlrSobreflete'                      => 0,                                        //Opcional  
                'Num_VlrFlete'                           => 0,                                        //Opcional  
                'Num_Descuento'                          => 0,                                        //Opcional  
                'Num_PesoFacturado'                      => 0,                                        //Opcional  
                'idePaisOrigen'                          => 1,                                        //Obligatorio  
                'idePaisDestino'                         => 0,                                        //Obligatorio  
                'Des_IdArchivoOrigen'                    => 0,                                        //Obligatorio  
                'Des_DireccionRemitente'                 => 'Cll 144 no 84-20',                       //Opcional  
                'Est_CanalMayorista'                     => 'estado de edición canal mayorista',      //Opcional
                'Num_IdentiRemitente'                    => 800125497,                                //Opcional
                'Num_TelefonoRemitente'                  => 315458581,                                //Opcional
                'Des_CiudadRemitente'                    => 'Bogota',                                 //Opcional
                'Num_Alto'                               => 5,                                        //Obligatorio  
                'Num_Ancho'                              => 4,                                        //Obligatorio  
                'Num_Largo'                              => 5,                                        //Obligatorio  
                'Des_DepartamentoDestino'                => 'Cundinamarca',                           //Obligatorio  
                //'Des_DepartamentoOrigen'                 => 'Boyaca',                                 //Opcional  
                'Gen_Cajaporte'                          => 1,                                        //Opcional  
                'Gen_Sobreporte'                         => 0,                                        //Opcional 
                'Est_EnviarCorreo'                       => 'davidfigueroar9@gmail.com',               // 
                'Nom_UnidadEmpaque'                      => 'Generica',                               //Obligatorio  
                //'Nom_RemitenteCanal'                     => 'Makro',                                  //Opcional  
                'Des_UnidadLongitud'                     => 'cm',                                     //Obligatorio  
                'Des_UnidadPeso'                         => 'kg',                                     //Obligatorio  
                'Num_ValorDeclaradoSobreTotal'           => '200',                                   //Opcional  
                /*'Num_Factura'                            => 'fac78945612',                            //Opcional  
                'Des_CorreoElectronico'                  => 'servient@servientrega.com',              //Opcional  
                'Num_Recaudo'                            => '5000',                                   //Opcional  
                'id_zonificacion'                        => 'Z1',                                     //Opcional  
                'Des_codigopostal'                       => '123456',                                 //Opcional  
                'Rem_codigopostal'                       => '123456',                                 //Opcional  
                'CentroCosto'                            => 'Contabilidad',                           //Opcional  
                'ID_CANAL_DISTRIBUCION'                  => '4 (sr pack)',                            //Opcional  
                'CASILLERO_POSTAL'                       => 'ColBog04',                               //Opcional  */
                'Num_Guia'                               => '13423',   //Opcional


            ];
            $requestParams = [
                'envios'      => [
                    'CargueMasivoExternoDTO' => [
                        'objEnvios' => [$envio]
                    ]
                ],
                'arrayGuias'  => [
                    0 => '12345678-1234-1234-1234-123456789012'
                ]
            ];
            $response = $this->client->CargueMasivoExterno($requestParams);
            dd($response);
            return $response->CargueMasivoExternoResult;
        }

        public function RangoGuias()
        {
            $requestParams = ['Tipo_Guia' => 1];
            $response = $this->client->RangoGuias($requestParams);
            dd($response);
            return $response->DesencriptarContrasenaResult;
        }

        public function GenerarGuiaStickerTiendasVirtuales()
        {
            $requestParams = [
                'num_Guia' => 1
            ];
            $response = $this->client->GenerarGuiaStickerTiendasVirtuales($requestParams);
            dd($response);
        }

        public function ConsultarTipoGuias()
        {
            $requestParams = [
                'Mensaje' => ''
            ];
            $response = $this->client->ConsultarTipoGuias($requestParams);
            dd($response);
        }
    }
