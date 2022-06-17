<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2">
                @if( $lang == 'uz')  Xizmatlar  @endif
                @if( $lang == 'ru')  Сервисы  @endif
                @if( $lang == 'en')  Services  @endif
            </h2>
        </div>
        <div class="row g-4">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <img src="{{asset('assets/img/service/'.$service->img)}}" alt="" class="w-75">
                        </div>
                        <h5 class="mb-3">
                            @php
                            if ($lang == 'uz')  echo $service->title_uz;
                            if ($lang == 'ru')  echo $service->title_ru;
                            if ($lang == 'en')  echo $service->title_en;
                            @endphp
                        </h5>
                        <p>
                            @php
                            if($lang=='uz') echo $service->description_uz;
                            if($lang=='ru') echo $service->description_ru;
                            if($lang=='en') echo $service->description_en;
                                @endphp
                        </p>
                        <a class="btn px-3 mt-auto mx-auto" href="">
                            @if( $lang == 'uz')  Ko'rish @endif
                            @if( $lang == 'ru')  Видеть  @endif
                            @if( $lang == 'en')  See  @endif
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
