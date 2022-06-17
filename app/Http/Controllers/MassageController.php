<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massages=Massage::OrderBy('id','desc')->get();
        return view('admin.massage.index',[
            'massages'=>$massages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort('404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $massage=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'title'=>'required',
            'massage'=>'required'
        ]);
        Massage::create($massage);
        return  redirect()->route('contact')->with('success', 'created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function show(Massage $massage)
    {
        $massage->activity = 0;
        $massage->save();
        return view('admin.massage.show',[
            'massage'=>$massage
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function edit(Massage $massage)
    {
        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Massage $massage)
    {
        abort('404');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Massage $massage)
    {
        $massage->delete();
        return  redirect()->route('massage.index');
    }
}
