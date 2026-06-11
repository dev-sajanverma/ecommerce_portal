<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subDetail($slug)
    {
        return view('sub-category');
    }
}
