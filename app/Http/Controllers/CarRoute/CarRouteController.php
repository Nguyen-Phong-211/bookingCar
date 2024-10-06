<?php

namespace App\Http\Controllers\CarRoute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarRouteController extends Controller
{
    //index
    public function index()
    {
        return view('carRoute.carRoute');
    }
}
