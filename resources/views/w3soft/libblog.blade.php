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

        <div class="row g-4 portfolio-container">
            @foreach($blogs as $blog)

                <div class="col-lg-4 col-md-6 portfolio-item  wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100 " style="height: 300px"
                             src="{{asset('assets/img/post/'.$blog->img)}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/post/'.$blog->img)}}"
                               data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">

                                <h5 class="mt-3 " style="color: white">
                                    @php
                                        if ($lang == 'uz')  echo $blog->title_uz;
                                        if ($lang == 'ru')  echo $blog->title_ru;
                                        if ($lang == 'en')  echo $blog->title_en;
                                    @endphp
                                </h5>
                                <p style="color: white">
                                    @if ($lang == 'uz')
                                        {{ \Illuminate\Support\Str::limit($blog->description_uz, 50, '...')  }}
                                    @endif
                                    @if ($lang == 'ru')
                                        {{ \Illuminate\Support\Str::limit($blog->description_ru, 50, '...')  }}
                                    @endif
                                    @if ($lang == 'en')
                                        {{ \Illuminate\Support\Str::limit($blog->description_en, 50, '...')  }}
                                    @endif
                                </p>
                                <a class="mt-5 blogs"
                                   style="background: white;width: 100%; padding: 2%;border-radius: 10%;"
                                   href="{{route('singlepage',['id'=>$blog->id])}}">
                                    @if($lang=='uz')
                                        Ko'rish
                                    @endif
                                    @if($lang=='ru')
                                        Видеть
                                    @endif
                                    @if($lang=='en')
                                        See
                                    @endif
                                </a>

                            </div>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
