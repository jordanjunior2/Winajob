@extends('layouts.main')
@section('content')

<section class="candidates-profile-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="{{asset('public/files/avatars')}}/{{$user -> profil -> avatar}}" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                        <h4 class="text-white candidates-profile-name mb-2"> {{$user -> name}} </h4>
                        @if(Auth::user() -> user_type == 'Recruteur')
                        <a href="{{url('/showcandidates')}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-plus-circle"></i> Retour</a>
                        @endif
                        <p class="text-white-50 mb-2"><i class="mdi mdi-bank mr-2"></i> {{$user -> profil -> societe_actu}} </p>
                        <ul class="candidates-profile-icons list-inline mb-3">
                            <li class="list-inline-item text-white-50 pr-2 f-16"> {{$user -> profil -> fonction}} </li>
                            @for($nbre_etoile = $user -> profil -> nbre_etoile = 1;$nbre_etoile < 6;$nbre_etoile++)
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            @endfor
                        </ul>

                        <ul class="candidates-profile-social-icons list-inline mb-0">
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- CANDIDATES PROFILE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark">A Propos de Nous</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                        <div class="job-detail-desc">
                            <p class="text-muted f-14 mb-3"> {{$user -> profil -> bio}} </p>
                        </div>
                        <hr>
                        <ul class="list-inline mt-3 mb-0">
                            <li class="list-inline-item mr-3">
                                <a href="#" class="text-muted f-15 mb-0"><i class="mdi mdi-map-marker mr-2"></i> {{$user -> profil -> adresse}} </a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="{{$user -> profil ->portfolio}}" class="text-muted f-15 mb-0"><i class="mdi mdi-web mr-2"></i>PortFolio : {{$user -> profil ->portfolio}} </a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="#" class="text-muted f-15 mb-0"><i class="mdi mdi-email mr-2"></i> {{$user -> email}} </a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="#" class="text-muted f-15 mb-0"><i class="mdi mdi-cellphone-iphone mr-2"></i> {{$user -> profil -> phone_number}} </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-4">Vue D'ensemble</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                        <div class="job-detail-desc">
                            <p class="text-muted f-14 mb-3"> {{$user -> profil -> description}} </p>

                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-4 mb-4">Education</h3>
                </div>
            </div>

            <div class="row">
                @foreach($education as $education)
                <div class="col-lg-4">
                    <div class="job-detail candidates-profile-education text-center text-muted mb-5 mt-5">
                        <div class="profile-education-icon">
                            <i class="mdi mdi-school"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted"> {{$education -> etablissement}} </a></h6>
                        <p class="f-14 mb-1"> {{$education -> debut}} - {{$education -> fin}}</p>
                        <p class="f-14 mb-0"> {{$education -> diplome}} </p>
                        <hr class="mt-2 mb-2">
                        <p class="f-14 mb-0"> {{$education -> description_etude}} </p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mb-4">Experience</h3>
                </div>
            </div>

            <div class="row">
                @foreach($experiences as $experiences)
                <div class="col-md-6">
                    <div class="job-detail job-list-box mt-4 p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark"> {{$experiences -> nom_societe}} </a></h5>
                                    <p class="text-muted mb-0 f-16"> {{$experiences -> fonction}} </p>
                                    <p class="text-muted mb-0 f-16"> {{$experiences -> started_at ->diffForHumans()}} - {{$user -> profil -> experience ->finished_at ->diffForHumans()}} </p>
                                    <p class="text-muted mb-0 f-16">Salaire : {{$experiences -> salaire}} FCFA </p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i> {{$experiences -> email_societe}} </p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i> {{$experiences -> adresse_societe}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                @endforeach
                
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-4">Compétences</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        @foreach($skills as $skills)
                        <div class="col-lg-3 col-md-6">
                            <div class="text-center mt-4">
                                <div class="skills chart" data-percent="80">
                                    <div class="pie-chart-value"> {{$skills -> degre}} %</div>
                                </div>
                                <h5 class="text-muted mt-4 mb-0"> {{$skills -> name}} </h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CANDIDATES PROFILE END -->

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->
@endsection