<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GoogleAuthenticationController extends Controller
{
    public function setGoogleClient(Request $request){
        return view('auth.confirm-password');   
    }
}
