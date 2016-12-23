<?php

namespace Tendaz\Http\Controllers\Api\Geo;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Geo\Country;

class StatesController extends Controller
{
    public function index(Country $country)
    {
        return [$country->states];
    }
}
