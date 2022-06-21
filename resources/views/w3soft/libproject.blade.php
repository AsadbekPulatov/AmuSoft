<div class="container">
    <div>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
{{--            <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>--}}
                <h2 class="mt-2">
                    @if($lang=='uz')Yaqinda ishga tushirilgan loyihalar @endif
                    @if($lang=='ru')Недавно запущенные проекты @endif
                    @if($lang=='en')Recently launched projects @endif
                </h2>
        </div>
{{--        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <ul class="list-inline mb-5" id="portfolio-flters">--}}
{{--                    <li class="btn px-3 pe-4 active" data-filter="*">--}}
{{--                        @if($lang=='uz')Hammasi @endif--}}
{{--                        @if($lang=='ru')Это все @endif--}}
{{--                        @if($lang=='en')That's all @endif--}}
{{--                    </li>--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <li class="btn px-3 pe-4" data-filter=".n{{ $category->id }}">--}}
{{--                            {{ $category->name }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            @foreach($projects as $project)
                <div class="mb-3 col-lg-4 col-md-6 col-sm-12 portfolio-item n{{ $project->category->id }} wow zoomIn" data-wow-delay="0.{{ $projects->count() - $project->id + 1 }}s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/project/'.$project->img)}}" alt="" style="width: 100%; height: 300px;">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/project/'.$project->img)}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>{{ $project->category->name }}</small>
                                <a class="h5 d-block text-white mt-1 mb-0" target="_blank" href="{{ $project->url }}">{{ $project->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
