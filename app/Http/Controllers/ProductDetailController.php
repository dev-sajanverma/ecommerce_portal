<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function productDetail($slug)
    {
        return view('product-detail');
    }
}
