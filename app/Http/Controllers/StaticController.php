<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return '<h1>HOME PAGE</h1>';
    }

    public function about(){
        return '<h1>ABOUT PAGE</h1>';
    }

    public function portfolio(){
        return '<h1>PORTFOLIO PAGE</h1>';
    }

    public function contact(){
        return '<h1>CONTACT PAGE</h1>';
    }
}
