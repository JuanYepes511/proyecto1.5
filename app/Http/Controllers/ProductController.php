<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts(){
        return view("products.products");
    }
    public function detalle(){
        return view ("products.detalle");
    }
}
