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
                           placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2">
                @if($lang=='uz')
                    Jamoamiz a'zolari bilan tanishing
                @endif
                @if($lang=='ru')
                    Познакомьтесь с нашей команды
                @endif
                @if($lang=='en')
                    Meet our team members
                @endif
            </h2>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($abouts as $about)
                <div class="card">
                    <div class="card-header">
                        <img src="{{asset('assets/img/about/'.$about->image)}}" alt="rover"/>
                    </div>
                    <div class="card-body">

                        <span class="tag tag-teal">{{ $about->position }}</span>
                        <h4>
                            {{ $about->name }}
                        </h4>
                        <p>
                            @if($lang=='uz')
                                {{ $about->text_uz }}
                            @endif
                            @if($lang=='ru')
                                {{ $about->text_ru }}
                            @endif
                            @if($lang=='en')
                                {{ $about->text_en }}
                            @endif
                        </p>
                        <div class="user">
                            <div class="d-flex align-items-center mt-4">
                                @if($about->email != 'none')
                                    <a class="btn btn-outline-primary btn-square me-3"
                                       href="mailto://{{$about->email}}"><i
                                            class="fas fa-envelope"></i></a>
                                @endif
                                @if($about->instagram != 'none')
                                    <a class="btn btn-outline-primary btn-square me-3"
                                       href="https://instagram.com/{{$about->instagram}}"><i
                                            class="fab fa-instagram"></i></a>
                                @endif
                                @if($about->facebook != 'none')
                                    <a class="btn btn-outline-primary btn-square me-3"
                                       href="https://github.com/{{ $about->facebook }}"><i
                                            class="fab fa-github"></i></a>
                                @endif
                                @if($about->telegram != 'none')
                                    <a class="btn btn-outline-primary btn-square me-3"
                                       href="https://t.me/{{$about->telegram}}"><i
                                            class="fab fa-telegram"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        background-color: #f7f8fc;
        font-family: "Roboto", sans-serif;
        color: #10182f;
    }

    .card {
        margin: 10px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 300px;
    }

    .card-header img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
    }

    .tag {
        background: #cccccc;
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        padding: 2px 10px;
        text-transform: uppercase;
        cursor: pointer;
    }

    .tag-teal {
        background-color: #47bcd4;
    }

    .tag-purple {
        background-color: #5e76bf;
    }

    .tag-pink {
        background-color: #cd5b9f;
    }

    .card-body p {
        font-size: 13px;
        margin: 0 0 40px;
    }

    .user {
        display: flex;
        margin-top: auto;
    }

    .user img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .user-info h5 {
        margin: 0;
    }

    .user-info small {
        color: #545d7a;
    }

</style>


{{--<div class="container-xxl py-5">--}}
{{--    <div class="container px-lg-5">--}}
{{--        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--            <h2 class="mt-2">--}}
{{--                @if($lang=='uz')Jamoamiz a'zolari bilan tanishing @endif--}}
{{--                @if($lang=='ru')Познакомьтесь с нашей команды @endif--}}
{{--                @if($lang=='en')Meet our team members @endif--}}
{{--            </h2>--}}
{{--        </div>--}}
{{--        <div class="row g-4">--}}
{{--            @foreach($abouts as $about)--}}
{{--                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                    <div class="team-item">--}}
{{--                        <div class="d-flex">--}}
{{--                            <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"--}}
{{--                                 style="width: 75px;">--}}
{{--                                @if($about->facebook != 'none')--}}
{{--                                    <a class="btn btn-square text-primary bg-white my-1"--}}
{{--                                       href="https://facebook.com/{{$about->facebook}}"><i--}}
{{--                                            class="fab fa-facebook-f"></i></a>--}}
{{--                                @endif--}}
{{--                                @if($about->email!='none')--}}
{{--                                    <a class="btn btn-square text-primary bg-white my-1"--}}
{{--                                       href="mailto://{{$about->email}}"><i class="fas fa-envelope"></i></a>--}}
{{--                                @endif--}}
{{--                                @if($about->instagram!='none')--}}
{{--                                    <a class="btn btn-square text-primary bg-white my-1"--}}
{{--                                       href="https://instagram.com/{{$about->instagram}}"><i--}}
{{--                                            class="fab fa-instagram"></i></a>--}}
{{--                                @endif--}}
{{--                                @if($about->telegram!='none')--}}
{{--                                    <a class="btn btn-square text-primary bg-white my-1"--}}
{{--                                       href="https://t.me/{{$about->telegram}}"><i class="fab fa-telegram"></i></a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <img class="img-fluid rounded " style=" width: 80%; height: 400px"--}}
{{--                                 src="{{ asset('assets/img/about_img/'.$about->image) }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="px-4 py-3">--}}
{{--                            <h5 class="fw-bold m-0">{{$about->name}}</h5>--}}
{{--                            <small>{{$about->position}}</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            @endforeach--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Team End -->
