<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $rs=Models\Member::all();
        return view('member',['rs'=>$rs]);
    }
}
