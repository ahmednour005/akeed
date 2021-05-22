<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function index(){
        return view('front.pages.services');
    }
    public function show($id){
        return view('front.pages.viewServices');
    }
}
