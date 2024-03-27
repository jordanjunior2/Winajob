<!-- counter start -->
<section class="section bg-counter">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row" id="counter">
                <div class="col-lg-3 col-md-6">
                    <div class="home-counter pt-3">
                        <div class="float-left counter-icon mr-3">
                            <i class="mdi mdi-bank h1 text-white"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter-value text-custom mb-1" data-count="{{$comp}}">{{$comp}}</h1>
                            <p class="counter-name text-white f-14 text-uppercase">Companies</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="home-counter pt-3">
                        <div class="float-left counter-icon mr-3">
                            <i class="mdi mdi-file-document-box h1 text-white"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter-value text-custom mb-1" data-count="{{$applicants}}">{{$applicants}}</h1>
                            <p class="counter-name text-white f-14 text-uppercase">Applications</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="home-counter pt-3">
                        <div class="float-left counter-icon mr-3">
                            <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter-value text-custom mb-1" data-count="{{$job}}">{{$job}}</h1>
                            <p class="counter-name text-white f-14 text-uppercase">Offres Postées</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="home-counter pt-3">
                        <div class="float-left counter-icon mr-3">
                            <i class="mdi mdi-account-multiple-plus h1 text-white"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter-value text-custom mb-1" data-count="{{$member}}">{{$member}}</h1>
                            <p class="counter-name text-white f-14 text-uppercase">Membres</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- counter end -->