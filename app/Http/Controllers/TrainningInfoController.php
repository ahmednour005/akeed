<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\Trainning;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainningInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.trainning')->with('trainning',Trainning::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\Trainning  $trainning
     * @return \Illuminate\Http\Response
     */
    public function show(Trainning $trainning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Trainning  $trainning
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainning $trainning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Trainning  $trainning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainning $trainning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Trainning  $trainning
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trainning::find($id)->delete();
        return redirect()->back();
    }
}
