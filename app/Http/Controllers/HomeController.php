<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $name ="Akhdan";
        return view('welcome',compact('name'));
    }
}
