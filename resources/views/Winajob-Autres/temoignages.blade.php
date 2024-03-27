 <!-- testimonial start -->
 <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h4>Nos Reussites</h4>
                        <p class="text-muted mb-1"></p>
                        <div class="title-icon position-relative">
                            <i class="mdi mdi-chevron-down position-relative h3 text-custom bg-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-12">
                    <div id="owl-testi" class="owl-carousel owl-theme">
                    <div class="item testi-box p-4 mr-3 ml-2 bg-light position-relative">
                            <p class="text-muted mb-5">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="images/testi/img-3.png" alt="" class="rounded-circle">
                                </div>
                                <h5 class="f-18 pt-1">XXXXXX</h5>
                                <p class="text-muted mb-0">XXXX XXXXXXXXX</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="item testi-box p-4 mr-3 ml-2 bg-light position-relative">
                            <p class="text-muted mb-5">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="images/testi/img-3.png" alt="" class="rounded-circle">
                                </div>
                                <h5 class="f-18 pt-1">XXXXXX</h5>
                                <p class="text-muted mb-0">XXXX XXXXXXXXX</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="item testi-box p-4 mr-3 ml-2 bg-light position-relative">
                            <p class="text-muted mb-5">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="images/testi/img-3.png" alt="" class="rounded-circle">
                                </div>
                                <h5 class="f-18 pt-1">XXXXXX</h5>
                                <p class="text-muted mb-0">XXXX XXXXXXXXX</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center mt-5 pt-4">
                <div class="col-lg-8">
                    <div class="text-center mb-4">
                        <h4>Nos Clients</h4>
                        <p class="text-muted">Vous pouvez ici découvrir quelques uns de nos clients</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                @foreach($clients as $clients)
                <div class="col-md-3">
                    <div class="client-images">
                        <img src="{{asset('public/files/logos')}}/{{$clients->logo}}" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- testimonial end -->