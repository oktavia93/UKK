<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        return view('home');
    }
    function about(){
        return view('about');
    }
    function service(){
        return view('service');
    }
    function produk(){
        return view('produk');
    }
    function login(){
        return view('login');
    }
    function sahiwal(){
        return view('sahiwal');
    }
    function Sindhi(){
        return view('Sindhi');
    }
    function grati(){
        return view('grati');
    }
}
