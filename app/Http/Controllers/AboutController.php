<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Null_;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::OrderBy('id', 'DESC')->get();
        return view('admin.about.index', ['abouts' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $abouts = About::OrderBy('id', 'desc')->first();
//        if ($abouts == NULL) $id = 0;
//        else
//            $id = $abouts->id;
//        $id++;

        $request->validate([
            'facebook' => 'required',
            'email' => 'required',
            'instagram' => 'required',
            'telegram' => 'required',
            'name' => 'required',
            'position' => 'required',
            'text_uz' => 'required',
            'text_ru' => 'required',
            'text_en' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        $img = time().'.jpg';
        $path = 'assets/img/about/';
        $request->image->move($path, $img);

//        $img = "images-" . $id . ".jpg";
//        $path = "assets/img/about_img/";
//        $request->image->move($path, $img);

        About::create([
            'facebook' => $request['facebook'],
            'email' => $request['email'],
            'instagram' => $request['instagram'],
            'telegram' => $request['telegram'],
            'name' => $request['name'],
            'text_uz' => $request['text_uz'],
            'text_ru' => $request['text_ru'],
            'text_en' => $request['text_en'],
            'position' => $request['position'],
            'image' => $img
        ]);

        return redirect()->route('abouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', ['abouts' => $about]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {

        $request->validate([
            'facebook' => 'required',
            'email' => 'required',
            'instagram' => 'required',
            'telegram' => 'required',
            'name' => 'required',
            'text_uz' => 'required',
            'text_ru' => 'required',
            'text_en' => 'required',
            'position' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,gif',
        ]);

//dd($about->id);
//        if ($request->hasFile('image'))
//        {
//            $img = "images-" . $about->id . ".jpg";
//            $path = "assets/img/about_img/";
//            $request->image->move($path, $img);
        if ($request->image == NULL) $img = $about->image;
        else {
            File::delete(public_path('assets/img/about/'.$about->image));
            $img = time().'.jpg';
            $path = 'assets/img/about/';
            $request->image->move($path, $img);
        }

            $about->update([
                'facebook' => $request['facebook'],
                'email' => $request['email'],
                'instagram' => $request['instagram'],
                'telegram' => $request['telegram'],
                'name' => $request['name'],
                'text_uz' => $request['text_uz'],
                'text_ru' => $request['text_ru'],
                'text_en' => $request['text_en'],
                'position' => $request['position'],
                'image' => $img
            ]);

        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        File::delete(public_path('assets/img/about/'.$about->image));
        $about->delete();
        return redirect()->route('abouts.index');
    }
}
