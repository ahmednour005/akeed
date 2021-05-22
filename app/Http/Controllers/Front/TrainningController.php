<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\Cource;
use App\Models\Modelbackend\Trainning;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainningController extends Controller
{
    public function index(){
        return view('front.pages.trainning')->with('courses',Cource::all());
    }

    public function store(Request $request)
    {

        $cv= null;
        if($request->hasFile('cv')) {
            $cv =  $request->cv;
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $cv_name = $timestamp . $cv-> getClientOriginalName();
            $cv->move(public_path('/cvs/Cv/'), $cv_name);
            $cv=$cv_name;
        }
         Trainning::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'course'=>$request->course,
            'cv' => $cv
        ]);
        return redirect()->back();
    }

}
