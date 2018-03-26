<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    
    //temporary 
    public function individualCity(){
        return view('pages.individualCity');
    }
    public function individualRestaurant(){
        return view('pages.individualRestaurant');
    }
}
