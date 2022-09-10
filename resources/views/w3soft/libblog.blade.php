<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            {{--            <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>--}}
            <h2 class="mt-2">
                @if($lang=='uz')
                    Yangiliklar
                @endif
                @if($lang=='ru')
                    Новости
                @endif
                @if($lang=='en')
                    News
                @endif
            </h2>
        </div>

        <div class="row g-1 ">
                <div class="row g-1 justify-content-center">
                    @foreach($blogs as $blog)
                       <div class="card  col-lg-5 col-sm-11 col-md-5  m-4 " style="box-shadow: 0px 0px 10px 10px #a5a4a4">
                            <div class="card-header">
                                <img style="height: 300px" class="w-100" src="{{asset('assets/img/post/'.$blog->img)}}" alt="AmuSoft"/>
                            </div>
                            <div class="card-body">

                                <h4> @php
                                        if ($lang == 'uz')  echo $blog->title_uz;
                                        if ($lang == 'ru')  echo $blog->title_ru;
                                        if ($lang == 'en')  echo $blog->title_en;
                                    @endphp
                                </h4>
                                <hr>
                                <p class="text text-dark" style="text-align: justify">
                                    @if ($lang == 'uz')
                                        {{ \Illuminate\Support\Str::words($blog->description_uz, 10) }}
                                    @endif
                                    @if ($lang == 'ru')
                                            {{ \Illuminate\Support\Str::words($blog->description_ru, 10) }}
                                    @endif
                                    @if ($lang == 'en')
                                            {{ \Illuminate\Support\Str::words($blog->description_en, 10) }}
                                    @endif
                                </p>
                                <hr>
                                <a class="blogs btn btn-success  btn-lg d-flex justify-content-between"
                                   style="width: 120px;"
                                   href="{{route('singlepage',['id'=>$blog->id])}}">
                                    <span class="mr-4">
                                    @if($lang=='uz')
                                        Ko'rish
                                    @endif
                                    @if($lang=='ru')
                                        Видеть
                                    @endif
                                    @if($lang=='en')
                                        See
                                    @endif
                                   </span>
                                        <i class="bi bi-arrow-bar-right "></i>
                                </a>
                            </div>
                        </div>
                           @endforeach
                </div>

        </div>

    </div>
</div>
