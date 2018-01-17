<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class PdtContentController extends Controller
{
    public function index(){
        $rs=Models\PdtContent::all();
        return view('PdtContent',['rs'=>$rs]);
    }
}
