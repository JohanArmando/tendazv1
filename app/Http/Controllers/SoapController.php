<?php

namespace Tendaz\Http\Controllers;

use Illuminate\Http\Request;
use Tendaz\Api\Servientrega\Servientrega;

class SoapController extends Controller
{
    protected $servientrega;

    function __construct()
    {
        $this->servientrega = New Servientrega('testtendaz','BpSUh12jBIiWdACDozgOaQ==','SER408','Test Tendaz');
    }
    public function soap()
    {
        //echo print_r($this->servientrega->CrearGuia());
        //$this->servientrega->ConsultarTipoGuias();
        return $this->servientrega->EncriptarContrasena('Colombia1');
    }
}
