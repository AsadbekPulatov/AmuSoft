@extends('layouts.master')
@section('hero')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">
            @if($lang=='uz')
                Biz bilan bog'lanish
            @endif
            @if($lang=='ru')
                Cвяжитесь с нами
            @endif
            @if($lang=='en')
                Contact Us
            @endif
        </h1>
        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
    </div>
@endsection
@section('content')
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
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
                         data-wow-delay="0.1s">
                        {{--                        <h6 class="position-relative d-inline text-primary ps-4">Contact Us</h6>--}}
                        <h2 class="mt-2">
                            @if($lang=='uz')
                                Har qanday so'rov uchun murojaat qiling
                            @endif
                            @if($lang=='ru')
                                Свяжитесь с нами по любым вопросам
                            @endif
                            @if($lang=='en')
                                For inquiries and appeals
                            @endif
                        </h2>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form action="{{route('massage.store')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Ismingiz" required>
                                        <label for="name">
                                            @if($lang=='uz')
                                                Ismingiz
                                            @endif
                                            @if($lang=='ru')
                                                Ваше имя
                                            @endif
                                            @if($lang=='en')
                                                Your name
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Emailingiz" required>
                                        <label for="email">
                                            @if($lang=='uz')
                                                Email
                                            @endif
                                            @if($lang=='ru')
                                                Эл. адрес
                                            @endif
                                            @if($lang=='en')
                                                Email
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="title" id="subject"
                                               placeholder="Mavzu..." required>
                                        <label for="subject">
                                            @if($lang=='uz')
                                                Mavzu
                                            @endif
                                            @if($lang=='ru')
                                                Предмет
                                            @endif
                                            @if($lang=='en')
                                                Title
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Bu yerda xabar qoldiring"
                                                  name="massage" id="message" style="height: 150px" required></textarea>
                                        <label for="message">
                                            @if($lang=='uz')
                                                Xabar
                                            @endif
                                            @if($lang=='ru')
                                                Сообщение
                                            @endif
                                            @if($lang=='en')
                                                Message
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">
                                        @if($lang=='uz')
                                            Xabar yuborish
                                        @endif
                                        @if($lang=='ru')
                                            Отправить сообщение
                                        @endif
                                        @if($lang=='en')
                                            Send a message
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @if(session('success'))

        <script>
            Swal.fire({
                icon: 'success',
                @if($lang=='uz') text: 'Xabar muvaffaqiyatli jo’natildi!', @endif
                    @if($lang=='ru') text: 'Сообщение успешно отправлено!', @endif
                    @if($lang=='en') text: 'Message successfully sent!', @endif
                // text: 'Muvaffaqqiyatli bajarildi',
                confirmButtonText: 'Ok',
            })
        </script>
    @endif
@endsection
