@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="p-5" style="background-color: lightgray;">
            <h1 class="" style="font-size: 36px; color: black;">{{ $massage->title }}</h1>
            <hr>
            <p class="p-3" style="font-size: 24px; color: black;">{{ $massage->massage }}</p>
        </div>
    </div>
{{--    <div class="col-md-12">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-9"><h1 class="card-title" style="font-size: 36px;">{{ $massage->title }}</h1></div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="card-body">--}}
{{--                    --}}{{--                    <h1 class="text-white" style="font-size: 36px;"></h1>--}}
{{--                    <p class="" style="font-size: 24px;">{{ $massage->massage }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
