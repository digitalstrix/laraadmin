<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    function index(){
        return view('login');
    }
    function register(){
        return view('register');
    }
    function reset(){
        return view('reset');
    }
    function forgotpassword(){
        return view('forgotpassword');
    }
}