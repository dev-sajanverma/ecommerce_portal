<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    function signup()
    {
        return view('vendor.signup');
    }
    function login()
    {
        return view('vendor.login');
    }

    function forgot()
    {
        return view('vendor.forgot');
    }

    function index()
    {
        return view('vendor.index');
    }
    function addproduct()
    {
        return view('vendor.addproduct');
    }
    function viewproduct()
    {
        return view('vendor.viewproduct');
    }
    function editproduct()
    {
        return view('vendor.editproduct');
    }
    function orders()
    {
        return view('vendor.orders');
    }
    function orderdetails()
    {
        return view('vendor.orderdetails');
    }
    function users()
    {
        return view('vendor.users');
    }
    function profile()
    {
        return view('vendor.profile');
    }
}
