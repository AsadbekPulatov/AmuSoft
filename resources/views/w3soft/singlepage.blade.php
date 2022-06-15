@extends('layouts.master')
@section('hero')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">Batafsil ma'lumot</h1>
        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
    </div>
@endsection
@section('content')
    <div class="col-lg-4 col-md-6 portfolio-item container  wow zoomIn" data-wow-delay="0.1s" >
        <div class="row">
            <div class="col-md-6 ">
                <h1 class="pt-3">{{$posts->title}}</h1>

                <p class="mt-3">{{$posts->description}}</p>
            </div>

        <div class="col-md-6">
            <img src="{{asset('assets/img/post/'.$posts->img)}}" style="width: 500px">
        </div>
    </div>

@endsection
