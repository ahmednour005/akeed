<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){
        return view('front.pages.blogs');
    }
    public function show($id){
        return view('front.pages.viewBlog');
    }
}
