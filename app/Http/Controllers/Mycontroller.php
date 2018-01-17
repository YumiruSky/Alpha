<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function index(){
        $date=[
           'name'=>'Yumiru',
            'express'=>"\\(≧▽≦)/",
        ];
        return view('my_index',$date);
    }

    public function getHello(){
        return 'Hello yumiru';
    }
}
