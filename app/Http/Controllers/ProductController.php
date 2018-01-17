<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $rs=Models\Product::all();
        return view('product',['rs'=>$rs]);
    }

}
