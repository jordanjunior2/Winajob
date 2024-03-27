@extends('layouts.main')


@section('content')

<section class="about-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">A Propos de Nous</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">A Propos de Nous</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

   <!-- ABOUT US START -->
   <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-desc">
                        <h5 class="text-dark"><b> Envie d'en savoir plus sur nous ? </b> </h5>

                        <p class="text-muted">Vous etes sur la bonne page.</p>

                        <p class="text-muted">Faites plus ample conaissance avec Winajob.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT US END -->

    <!-- COUNTER START -->
    <section class="section bg-light">
        <div class="container">
            <div class="blog-post-counter">
                <div class="row" id="counter">
                    <div class="col-lg-3 col-md-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$data}}"></h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Jobs</p>
                                <i class="mdi mdi-account-multiple h3 text-muted"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$applicants}}">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Applications</p>
                                <i class="mdi mdi-file h3 text-muted"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$comp}}">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Compagnies</p>
                                <i class="mdi mdi-bank h3 text-muted"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$comp}}">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Recruteurs</p>
                                <i class="mdi mdi-account-group h3 text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COUNTER END -->

    <!-- COMPANY TESTIMONIAL START -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="text-dark font-weight-light">Temoignages</h3>
                    <div class="blog-post-border mt-3 mb-3"></div>
                    @foreach($avis as $avis)
                    @foreach($avis -> users as $user)
                    <h5 class="text-muted mb-1">{{$user -> name }} </h5>
                
                    <p class="mb-4 f-16"><a href="#" class="text-muted"><i class="mdi mdi-earth mr-2"></i> {{$user -> name}} </a></p>
                    @endforeach
                    <p class="text-muted f-14"> {{Illuminate\Support\Str::limit($avis -> avis,15)}} </p>
                    
                    
                    <hr>
                    <ul class="list-inline mb-4">
                        <li class="list-inline-item">
                            <a href="{{url('/showavis',$avis -> id)}}" class="btn btn-outline">En Savoir plus</a>
                        </li>
                        <li class="list-inline-item float-right mt-2">
                            <ul class="list-inline bolg-post-icon mb-0">
                                <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                                <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                   
                </div>

                <div class="col-lg-7">
                    <div class="blog-post-testi">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-4">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link about-us active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <div class="blog-post-testi-img">
                                            <img src="{{asset('public/files/avis')}}/{{$avis->image}}" alt="" class="img-fluid mx-auto d-block rounded">
                                            <div class="blog-post-overlay">
                                                <div class="blog-post-testi-icon text-center">
                                                    <i class="mdi mdi-plus-circle-outline text-white h4"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="nav-link about-us" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                        <div class="blog-post-testi-img">
                                            <img src="{{asset('partial/images/blog-post/img-8.jpg')}}images/blog-post/img-8.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                            <div class="blog-post-overlay">
                                                <div class="blog-post-testi-icon text-center">
                                                    <i class="mdi mdi-plus-circle-outline text-white h4"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="nav-link about-us" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                        <div class="blog-post-testi-img">
                                            <img src="{{asset('partial/images/blog-post/img-9.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                            <div class="blog-post-overlay">
                                                <div class="blog-post-testi-icon text-center">
                                                    <i class="mdi mdi-plus-circle-outline text-white h4"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="nav-link about-us" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                        <div class="blog-post-testi-img">
                                            <img src="{{asset('partial/images/blog-post/img-10.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                            <div class="blog-post-overlay">
                                                <div class="blog-post-testi-icon text-center">
                                                    <i class="mdi mdi-plus-circle-outline text-white h4"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-9 col-8">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div>
                                            <img src="{{asset('partial/images/blog-post/img-7.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div>
                                            <img src="{{asset('partial/images/blog-post/img-8.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <div>
                                            <img src="{{asset('partial/images/blog-post/img-9.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <div>
                                            <img src="{{asset('partial/images/blog-post/img-10.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- COMPANY TESTIMONIAL START -->


    <!-- DOWNLOAD APP START -->
    <section class="counter-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1 order-2">
                    <div class="job-about-app-img mt-40">
                        <img src="{{asset('partial/images/app-download-img.png')}}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>

                <div class="col-md-6 order-md-2 order-1">
                    <div class="app-about-content">
                        <div class="app-about-desc text-white">
                            <h4 class="text-white mb-3 font-weight-light">Obtenez Notre Application Mobile</h4>
                            <p class="mb-4 f-15 font-weight-light text-white-50"> Vous avez également la possibilité d'entrer en possession de la version mobile de notre application </p>
                            <div>


                                <a href="#" class="btn app-btn btn-outline mb-3">
                                    <div class="app-store">
                                        <div class="float-left">
                                            <i class="mdi mdi-google-play h1"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="font-weight-light space f-12 mb-0"> Verrsion Android sur</p>
                                            <h5 class="mb-0 f-18">Google play</h5>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DOWNLOAD APP END -->

    <!-- ABOUT CLIENTS START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-10">
                    <div class="title-name text-center">
                        <h2 class="text-dark mb-3">Clients</h2>
                        
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                @foreach($clients as $client)
                <div class="col-lg-2 col-md-6">
                    <div class="client-images mt-4">
                        <img src="{{asset('public/files/logos')}}/{{$client ->logo}}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                @endforeach
                {{$clients -> links('Winajob-Autres.my-paginate')}}
            </div>
        </div>
    </section>
    <!-- ABOUT CLIENTS END -->

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->

@endsection