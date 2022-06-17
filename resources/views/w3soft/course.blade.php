@extends('layouts.master')
@section('hero')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">
            @if($lang=='uz') Kurslar @endif
            @if($lang=='ru') Курсы @endif
            @if($lang=='en') Courses @endif
        </h1>
        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
    </div>
@endsection
@section('content')
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container p-5 border">
                <form action="{{ route('bookings.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="course_id" id="course_id">
                    <div class="form-group">
                        <label for="name">
                           @if($lang=='uz')  Ism: @endif
                           @if($lang=='ru')  Имя: @endif
                           @if($lang=='en') Name: @endif
                        </label>
                        <input type="text" name="name" class="form-control mb-3" id="name"  required>
                    </div>
                    <div class="form-group">
                        <label for="surname">
                            @if($lang=='uz')  Familiya: @endif
                            @if($lang=='ru')  Фамилия: @endif
                            @if($lang=='en')  Surname: @endif
                        </label>
                        <input type="text" name="surname" class="form-control mb-3" id="surname"  required>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            @if($lang=='uz')  Email: @endif
                            @if($lang=='ru')  Эл. адрес: @endif
                            @if($lang=='en')  Email: @endif
                        </label>
                        <input type="text" name="email" class="form-control mb-3" id="email"  required>
                    </div>
                    <div class="form-group">
                        <label for="phone">
                            @if($lang=='uz')  Tel_raqam: @endif
                            @if($lang=='ru')  Номер телефона: @endif
                            @if($lang=='en')  Phone number: @endif
                        </label>
                        <input type="text" name="phone" class="form-control mb-3" id="phone"  required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            @if($lang=='uz')  Saqlash @endif
                            @if($lang=='ru')  Сохранять @endif
                            @if($lang=='en')  Save @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                               placeholder="Qidiruv kalit so'zini kiriting">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach($courses as $course)
        <div class="row mb-3">
            <div class="col-lg-11 col-md-11 container d-flex justify-content-between">
                <div class="card col-5">
                    <div class="card-body">
                        <img src="{{ asset('assets/img/course/'.$course->img) }}" alt="rasm"
                             style="height: 300px; width: 100%; margin-right: 2rem">
                    </div>
                </div>
                <div class="card col-7">
                    <div class="card-header d-flex ">
                        {{$course->category->name}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> {{ $course->name }} </h5>
                        <p class="card-text">{{ $course->text }}</p>
                        <p class="card-text"><b>
                                @if($lang=='uz')  O'qituvchilar: @endif
                                @if($lang=='ru')  Учителя: @endif
                                @if($lang=='en')  Teachers: @endif
                            </b>{{ $course->teacher->name }}</p>
                        <p class="card-text"><b>
                                @if($lang=='uz')  Narxi: @endif
                                @if($lang=='ru')  Цена: @endif
                                @if($lang=='en')  Price:: @endif
                            </b> {{ $course->price }}</p>
                        <p class="card-text"><b>
                                @if($lang=='uz')  Davomiyligi: @endif
                                @if($lang=='ru')  Продолжительность: @endif
                                @if($lang=='en')  Time: @endif
                            </b> {{ $course->time }}</p>
                        <button onclick="store({{ $course->id }})" class="btn btn-primary">
                            @if($lang=='uz')   Kursga yozilish @endif
                            @if($lang=='ru')  Записаться на курс @endif
                            @if($lang=='en')  Writing in to course @endif
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        // var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        // btn.onclick = function () {
        //     modal.style.display = "block";
        // }
        function store(id) {
            $('#course_id').val(id);
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
