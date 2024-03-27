@extends('layouts.main')
@section('content')

<section class="candidates-listing-bg2">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="page-header-title text-center text-white mb-5 pb-5">
                                <h1 class="text-uppercase mb-0">Accueil</h1>
                                <div>
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                        <li class="breadcrumb-item"><a href="">Demandeur</a></li>
                                        <li class="breadcrumb-item active">Mon Accueil</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('Winajob-Autres.BarreRechercheProfil')
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- CANDIDATES LISTING START -->
    <section class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results mt-5">
                        <div class="float-left">
                            <h5 class="text-dark mb-0 pt-2">Mes Applications : {{$count}} </h5>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="col-lg-9">
                    <div class="candidates-listing-item">
                            @foreach($applicants as $applicant)
                            @foreach($applicant -> job as $user)
                        <div class="list-grid-item mt-4 p-2">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="candidates-img float-left mr-4">
                                        <img src="{{asset('public/files/logos')}}/{{$user -> company -> logo}}" alt="" class="img-fluid d-block rounded">
                                    </div>
                                    <div class="candidates-list-desc job-single-meta  pt-2">
                                        <h5 class="mb-2 f-19"><a href="#" class="text-dark"> {{$user -> titre}} </a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-4">
                                                <p class="text-muted f-15 mb-0"><i class="mdi mdi-account mr-1"></i> {{$user -> last_date}} </p>
                                            </li>

                                            <li class="list-inline-item mr-4">
                                                <p class="f-15 mb-0"><a href="#" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i> {{$user-> adresse}} </a></p>
                                            </li>

                                            <li class="list-inline-item">
                                                <p class="text-muted f-15 mb-0"><i class="mdi mdi-currency-usd mr-1"></i> {{$user -> salaire_min}}-{{$user -> salaire_max}} </p>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Adresse : {{$user -> ville}} </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        <div class="fav-icon">
                                            <i class="mdi mdi-heart f-20 like"></i>
                                        </div>
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="{{url('/showjob',$user -> id)}}" class="btn btn-outline btn-sm">Voir Offre</a>
                                            <a href="{{url('/cancelapplication',$user -> id)}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-plus-circle"></i> Retirer Candidature</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="candidates-item-desc">
                                        <hr>
                                        <p class="text-muted mb-2 f-14"> {{\Illuminate\Support\Str::limit($user -> description,20 )}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                            @endforeach 
                            {{$applicants -> links('Winajob-Autres.my-paginate')}}
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CANDIDATES LISTING END -->

    @include('Winajob-Autres.Suscribe')
@endsection