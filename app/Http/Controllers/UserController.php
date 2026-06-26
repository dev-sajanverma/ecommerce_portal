<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function register1()
    {
        return view('register1');
    }
    public function login()
    {
        return view('login');
    }
    public function login1()
    {
        return view('login1');
    }

    // user dashboard start here 
    function index () {
        return view('user.index');
    }

    function userHistory (){
        return view('user.userhistory');
    }

    function settings () {
        return view ('user.settings');
    }

    function details () {
        return view('user.details');
    }
}
