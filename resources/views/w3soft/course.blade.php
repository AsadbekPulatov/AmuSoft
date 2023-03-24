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

    <script src="https://www.google.com/recaptcha/enterprise.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script>
        grecaptcha.enterprise.ready(function() {
            grecaptcha.enterprise.execute("{{ env('RECAPTCHA_SITE_KEY') }}", {action: 'bookings'}).then(function(token) {
                // Add your logic to submit to your backend server here.
                console.log(token)
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container p-5 border">
                <form action="{{ route('bookings.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
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
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">+998</span>
                            <input type="text" name="phone" class="form-control" id="phone" required placeholder="901112233">
                        </div>
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
        <div class="row mb-5">
            <div class="col-11 container ">
                <div class="row">
                <div class="card col-lg-5 col-md-5 col-sm-10">
                    <div class="card-body">
                        <img src="{{ asset('assets/img/course/'.$course->img) }}" alt="rasm"
                             style="height: 300px; width: 100%; margin-right: 2rem">
                    </div>
                </div>
                <div class="card  col-lg-7 col-md-7 col-sm-10">
                    <div class="card-header d-flex text  text-primary  " style="font-size: 20px;font-weight: 700">
                        @if($lang=="uz"){{$course->name_uz}} @endif
                        @if($lang=="ru") {{$course->name_ru}} @endif
                        @if($lang=="en") {{$course->name_en}} @endif

                    </div>
                    <div class="card-body">

                        <p class="card-text "> <b class="text " style="color: #4306ab">
                            @if($lang=="en")  {{ $course->text_en }} @endif
                            @if($lang=="uz")  {{ $course->text_uz }} @endif
                            @if($lang=="ru")  {{ $course->text_ru }} @endif

                            </b>
                        </p>
                        <hr>
                        <p class="card-text"><b class="text text-primary">
                                @if($lang=='uz')  Mentor: @endif
                                @if($lang=='ru')  Ментор: @endif
                                @if($lang=='en')  Mentor: @endif
                            </b> <b class="text text-success">{{ $course->teacher->name }}</b></p>

                        <p class="card-text"><b class="text text-primary">
                                @if($lang=='uz')  Narxi: @endif
                                @if($lang=='ru')  Цена: @endif
                                @if($lang=='en')  Price: @endif
                            </b> <b class="text text-success"> {{ substr($course->price,0,3)}} {{ substr($course->price,3,3) }}
                                @if($lang=='uz')  so'm @endif
                                @if($lang=='ru')  сумма @endif
                                @if($lang=='en')  sum @endif
                            </b></p>
                        <p class="card-text"><b class="text text-primary">
                                @if($lang=='uz')  Davomiyligi: @endif
                                @if($lang=='ru')  Продолжительность: @endif
                                @if($lang=='en')  Time: @endif
                            </b> <b class="text text-success"> {{ $course->time }}
                        @if($lang=="uz") oy @endif
                        @if($lang=="ru") месяц @endif
                        @if($lang=="en") month @endif
                            </b>
                        </p>
                        <hr>
                        <button onclick="store({{ $course->id }})" class="btn btn-primary btn-lg" >
                            @if($lang=='uz')   Kursga yozilish @endif
                            @if($lang=='ru')  Бронировать @endif
                            @if($lang=='en')  To book @endif
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endforeach
    @if(session('success'))

        <script>
            Swal.fire({
                icon: 'success',
                @if($lang=='uz') text: 'Siz kursga muvaffaqiyatli yozildingiz! Yaqin orada siz bilan bog’lanamiz, e’tiboringiz uchun raxmat!', @endif
                    @if($lang=='ru') text: 'Вы успешно записались на курс! Мы свяжемся с вами в ближайшее время, спасибо за внимание!', @endif
                    @if($lang=='en') text: 'You have successfully enrolled in the course! We\'ll get back to you soon, thank you for your attention!', @endif
                // text: 'Muvaffaqqiyatli bajarildi',
                confirmButtonText: 'Ok',
            })
        </script>
    @endif
    @if(session('error'))

        <script>
            Swal.fire({
                icon: 'error',
                @if($lang=='uz') text: "Telefon raqami noto'g'ri kiritildi. (shu ko'rinishda kiriting: 919846045)", @endif
                    @if($lang=='ru') text: "Telefon raqami noto'g'ri kiritildi. (shu ko'rinishda kiriting: 919846045)", @endif
                    @if($lang=='en') text: "Telefon raqami noto'g'ri kiritildi. (shu ko'rinishda kiriting: 919846045)", @endif
                confirmButtonText: 'Ok',
            })
        </script>
    @endif
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
