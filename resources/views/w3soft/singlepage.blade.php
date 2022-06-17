@extends('layouts.master')
@section('hero')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">
            @if($lang=='uz') Batafsil ma'lumot @endif
            @if($lang=='ru')Учить больше @endif
            @if($lang=='en')Learn more @endif
        </h1>
        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
    </div>
@endsection
@section('content')
    <div class="col-lg-10 col-md-10 portfolio-item container  wow zoomIn" data-wow-delay="0.1s">
        <div class="row">
            <div class="col-md-6 ">
                <h1 class="pt-3">
                    @php
                        if ($lang == 'uz')  echo $posts->title_uz;
                        if ($lang == 'ru')  echo $posts->title_ru;
                        if ($lang == 'en')  echo $posts->title_en;
                    @endphp
                </h1>

                <p class="mt-3">
                    @php
                        if ($lang == 'uz')  echo $posts->description_uz;
                        if ($lang == 'ru')  echo $posts->description_ru;
                        if ($lang == 'en')  echo $posts->description_en;
                    @endphp
                </p>
            </div>

            <div class="col-md-6">
                <img src="{{asset('assets/img/post/'.$posts->img)}}" class="h-100" style="width: 500px">
            </div>
        </div>
    </div>
@endsection
