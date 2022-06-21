<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2">
                @if( $lang == 'uz')  Xizmatlar  @endif
                @if( $lang == 'ru')  Сервисы  @endif
                @if( $lang == 'en')  Services  @endif
            </h2>
        </div>
        @foreach($services as $service)
            <div class="row mb-5">
                <div class="col-11 container ">
                    <div class="row">
                        <div class="card col-lg-5 col-md-5 col-sm-10">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/service/'.$service->img) }}" alt="rasm"
                                     style="height: 300px; width: 100%; margin-right: 2rem">
                            </div>
                        </div>
                        <div class="card  col-lg-7 col-md-7 col-sm-10">
                            <div class="card-header d-flex text  text-primary  " style="font-size: 20px;font-weight: 700">
                                @php
                                    if ($lang == 'uz')  echo $service->title_uz;
                                    if ($lang == 'ru')  echo $service->title_ru;
                                    if ($lang == 'en')  echo $service->title_en;
                                @endphp

                            </div>
                            <div class="card-body">

                                <p class="card-text "> <b class="text " style="color: #4306ab">
                                        @php
                                            if($lang=='uz') echo $service->description_uz;
                                            if($lang=='ru') echo $service->description_ru;
                                            if($lang=='en') echo $service->description_en;
                                        @endphp

                                    </b>
                                </p>
                                <hr>



                                <a href="{{route('contact')}}"  class="btn btn-primary">
                                    @if($lang=='uz')  Biz bilan bog'lanish @endif
                                    @if($lang=='ru')  Свяжитесь с нами @endif
                                    @if($lang=='en') Contact us @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
