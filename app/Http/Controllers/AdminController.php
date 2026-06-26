<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login()
    {
        return view('admin.login');
    }

    function index()
    {
        return view('admin.index');
    }

    function orderdetails()
    {
        return view('admin.orderdetails');
    }
    function addcategory()
    {
        return view('admin.addcategory');
    }

    function viewcategory()
    {
        return view('admin.viewcategory');
    }
    function editcategory()
    {
        return view('admin.editcategory');
    }

    function users()
    {
        return view('admin.users');
    }
    function vendors()
    {
        return view('admin.vendors');
    }
    function orders()
    {
        return view('admin.orders');
    }

}
