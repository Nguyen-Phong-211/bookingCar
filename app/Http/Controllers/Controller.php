<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //index
    public function index()
    {
        return view('login.login');
    }
}
