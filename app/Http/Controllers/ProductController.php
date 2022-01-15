<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        return "Product";
    }

    function createProduct(){
       $product = Product::insert([[
            'name'          =>'Samsung1',
            'code'          =>'12',
            'level'         =>'phone',
            'status'        =>1
        ],
        [
            'name'          =>'Samsung2',
            'code'          =>'12',
            'level'         =>'phone',
            'status'        =>1
        ]]);
        return $product;
    }
}
