@extends('admin.master')
@section('content')
    <div class="bg-warning p-5">
        <h1 class="text-white" style="font-size: 36px;">{{ $massage->title }}</h1>
        <p class="text-white p-3" style="font-size: 24px;">{{ $massage->massage }}</p>
    </div>
@endsection
