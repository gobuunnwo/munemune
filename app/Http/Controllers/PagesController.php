<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Larvel';
        return view('index',compact('title'));
    }

    public function about(){
        $title = 'Welcome to Larvel';
        return view('about',compact('title'));
    }

    

}
