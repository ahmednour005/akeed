<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\Cource;
use Illuminate\Http\Request;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = null;
        $courses=Cource::all();
        return view('dashboard.pages.addcource',compact('courses','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = null;
      Cource::create([
            'name'=>$request->name
        ]);
        $courses=Cource::all();
        return view('dashboard.pages.addcource',compact('courses','data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function show(Cource $cource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cource::findOrFail($id);
        $courses = Cource::all();
        return view('dashboard.pages.addcource', compact('courses', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $courses = Cource::findOrFail($id);
        $courses->update($input);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cource::find($id)->delete();
        return redirect()->back();
    }
}
