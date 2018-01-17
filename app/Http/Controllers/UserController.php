<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $rs=Models\User::findOrFail($id)->get();
        return view('user\profile',['rs' => $rs]);
    }

    public function showAll()
    {
        $rs=Models\User::id()->get();
        return view('user\profile',['rs' => $rs]);
    }
}
