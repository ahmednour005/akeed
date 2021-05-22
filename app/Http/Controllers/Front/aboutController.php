<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\CompanyDate;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){
        $dates = CompanyDate::orderBy('company_date', 'ASC')->get();
        return view('front.pages.about',compact('dates'));
    }
}
