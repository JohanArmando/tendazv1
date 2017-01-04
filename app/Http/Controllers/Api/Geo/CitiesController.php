<?php

namespace Tendaz\Http\Controllers\Api\Geo;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Geo\State;

class CitiesController extends Controller
{
    public function index(State $state)
    {
        return [$state->cities];
    }
}
