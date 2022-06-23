<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Requests\SaveServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::orderby('id','desc')->get();
        return view('admin.services.index',[
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service();
        return view('admin.services.form',[
            'service' => $service
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveServiceRequest $request,Service $service)
    {
        $post =  Service::OrderBy('id', 'DESC')->first();
        if ($post == NULL) $id = 0;
        else $id = $post->id;
        $id++;

        $img="service-".$id.".jpg";
        $path="assets/img/service/";
        $request->img->move($path,$img);

        $service->create([
            'title_uz' => $request['title_uz'],
            'description_uz' => $request['description_uz'],
            'title_ru' => $request['title_ru'],
            'description_ru' => $request['description_ru'],
            'title_en' => $request['title_en'],
            'description_en' => $request['description_en'],
            'img' => $img
        ]);

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.form',[
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(SaveServiceRequest $request, Service $service)
    {
        if($request->hasFile('img')) {
        $img="service-".$service->id.".jpg";
        $path='assets/img/service/';
        $request->img->move($path,$img);

        $service->update([
            'title_uz'=>$request['title_uz'],
            'description_uz'=>$request['description_uz'],
            'title_ru' => $request['title_ru'],
            'description_ru' => $request['description_ru'],
            'title_en' => $request['title_en'],
            'description_en' => $request['description_en'],
            'img'=>$img
        ]);}
        else{
            $service->update([
                'title_uz'=>$request['title_uz'],
                'description_uz'=>$request['description_uz'],
                'title_ru' => $request['title_ru'],
                'description_ru' => $request['description_ru'],
                'title_en' => $request['title_en'],
                'description_en' => $request['description_en'],

            ]);
        }
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $img=$service->img;
        if (File::exists(public_path('assets/img/service/'.$img))){
            File::delete(public_path('assets/img/service/'.$img));
        }
        $service->delete();
        return  redirect()->route('services.index');
    }
}
