@extends('layouts.main')
@section('content')

<section class="candidates-listing-bg">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="page-header-title text-center text-white mb-5 pb-5">
                                <h1 class="text-uppercase mb-0">Liste des Profils</h1>
                                <div>
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                        <li class="breadcrumb-item"><a href="">Candidats</a></li>
                                        <li class="breadcrumb-item active">Liste des profils</li>
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
    <section class="class">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results mt-5">
                        <div class="float-left">
                            <h5 class="text-dark mb-0 pt-2">Affichage  Resultat : {{$count}} </h5>
                        </div>
                        <div class="sort-button float-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3">
                                    <select class="form-control">
                                        <option data-display="Filrer Par">Filtrer</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="col-lg-9">
                    <div class="candidates-listing-item">
                            @foreach($applicants as $applicant)
                        <div class="list-grid-item mt-4 p-2">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="candidates-img float-left mr-4">
                                        <img src="{{asset('public/files/avatars')}}/{{$applicant -> avatar}}" alt="" class="img-fluid d-block rounded">
                                    </div>
                                    <div class="candidates-list-desc job-single-meta  pt-2">
                                        <h5 class="mb-2 f-19"><a href="#" class="text-dark"> {{$applicant -> name}} </a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-4">
                                                <p class="text-muted f-15 mb-0"><i class="mdi mdi-account mr-1"></i> {{$applicant-> fonction}} </p>
                                            </li>

                                            <li class="list-inline-item mr-4">
                                                <p class="f-15 mb-0"><a href="#" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i> {{$applicant -> adresse}} </a></p>
                                            </li>

                                            <li class="list-inline-item">
                                                <p class="text-muted f-15 mb-0"><i class="mdi mdi-currency-usd mr-1"></i> {{$applicant-> salaire}} </p>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Domanies de travail : {{$applicant -> experience}} </p>
                                        
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        <div class="fav-icon">
                                            <i class="mdi mdi-heart f-20 like"></i>
                                        </div>
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="{{url('user/showprofile',$applicant -> id)}}" class="btn btn-outline btn-sm">Voir Profil</a>
                                            <a href="{{url('/contactprofile',$applicant  -> id)}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-plus-circle"></i> Contacter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="candidates-item-desc">
                                        <hr>
                                        <p class="text-muted mb-2 f-14"> {{\Illuminate\Support\Str::limit($applicant -> description,20 )}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
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