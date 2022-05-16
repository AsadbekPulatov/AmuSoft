

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
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
{{--                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>--}}
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    @foreach($abouts as $about)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">



                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://facebook.com/{{$about->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="mailto://{{$about->twitter}}"><i class="fas fa-envelope"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://instagram.com/{{$about->instagram}}"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://youtube.com/{{$about->youtube}}"><i class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://t.me/{{$about->telegram}}"><i class="fab fa-telegram"></i></a>
                                </div>
                                <img class="img-fluid rounded " style=" width: 80%; height: 400px" src="{{ asset('assets/img/about_img/'.$about->image) }}" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">{{$about->name}}</h5>
                                <small>{{$about->position}}</small>
                            </div>
                        </div>

                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Team End -->
