<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function index(){
        return view('front.pages.projects');
    }
    public function show($id){
        return view('front.pages.viewProjects');
    }
}
