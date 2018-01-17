<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $rs=Models\Category::all();
        return view('category',['rs'=>$rs]);
    }


}
