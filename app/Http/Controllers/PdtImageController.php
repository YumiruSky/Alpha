<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class PdtImageController extends Controller
{
    public function index(){
        $rs=Models\PdtImage::all();
        return view('pdtImage',['rs'=>$rs]);
    }
}
