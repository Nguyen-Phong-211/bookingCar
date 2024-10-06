<?php

namespace App\Http\Controllers\SendingEmail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendingEmailController extends Controller
{
    //index
    public function index()
    {
        return view('sendingEmail.sendingEmail');
    }
}
