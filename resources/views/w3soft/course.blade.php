@extends('layouts.master')
@section('hero')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">Kurslar</h1>
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
                        <label for="name">Ism: </label>
                        <input type="text" name="name" class="form-control mb-3" id="name" placeholder="Ism" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Familiya: </label>
                        <input type="text" name="surname" class="form-control mb-3" id="surname" placeholder="Familiya" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="text" name="email" class="form-control mb-3" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Tel raqami: </label>
                        <input type="text" name="phone" class="form-control mb-3" id="phone" placeholder="Tel raqami" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
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
                        <p class="card-text"><b>O'qituvchilar:</b>{{ $course->teacher->name }}</p>
                        <p class="card-text"><b>Narxi:</b> {{ $course->price }}</p>
                        <p class="card-text"><b>Davomiyligi:</b> {{ $course->time }}</p>
                        <button onclick="store({{ $course->id }})" class="btn btn-primary">Kursga yozilish</button>
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
