@extends('layouts.main')
@section('content')

<section class="employers-details-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Details de l'Entreprise</h1>
                        @if(Auth::user() -> user_type == 'Demandeur')
                        @if(!$data->checkFollowed())
                        <a href="{{url('/followcompany',$data -> id)}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-plus-circle"></i> S'Abonner</a>
                        @else
                        <a href="{{url('/unfollowcompany',$data -> id)}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-plus-circle"></i> Se Désabonner</a>
                        @endif
                        @endif
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="">Recruteurs</a></li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- EMPLOYERS DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center p-3">
                        <div class="employers-details-img mb-2">
                            <img src="{{asset('public/files/logos')}}/{{$data->logo}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="font-weight-light"><a href="#" class="text-dark"> {{$data -> cname}} </a></h3>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-2"><i class="mdi mdi-map-marker mr-2"></i> {{$data -> adresse}} </p>
                            </li>
                            @if(empty($data -> certification == "non ok") )
                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-marker mr-2"></i>Non Verifié</p>
                            </li>
                            @else
                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-marker-check text-success mr-2"></i>Verifiée</p>
                            </li>
                            @endif
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
                                <p class="text-muted mb-2"><i class="mdi mdi-earth mr-2"></i> {{$data -> website}} </p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-2"><i class="mdi mdi-email mr-2"></i> {{$verified -> email}} </p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-cellphone-iphone mr-2"></i> {{$data -> phone}} </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="employers-details p-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-md-4">
                                <div class="text-center m-14">
                                    <h5 class="font-weight-light text-dark mb-1">Employés</h5>
                                    <p class="text-muted mb-0">{{$data -> employes}}</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <div class="text-center m-14">
                                    <h5 class="font-weight-light text-dark mb-1">Type</h5>
                                    <p class="text-muted mb-0"> {{$data -> type}} </p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <div class="text-center m-14">
                                    <h5 class="font-weight-light text-dark mb-1">Experience</h5>
                                    <p class="text-muted mb-0"> {{$data -> experience}} Ans Exp.</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <div class="text-center m-14">
                                    <h5 class="font-weight-light text-dark mb-1">Cachet median</h5>
                                    <p class="text-muted mb-0"> {{$data -> min}} - {{$data -> max}}/mois </p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <div class="text-center m-14">
                                    <h5 class="font-weight-light text-dark mb-1">Followers</h5>
                                    <p class="text-muted mb-0">{{$followers}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-5">Vue de L'Entreprise</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                        <div class="job-detail-desc">
                            <p class="text-muted f-14 mb-3">{{$data -> description}}.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-4">Services</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                        <div class="job-detail-desc">
                            <p class="text-muted f-14 mb-3">Voici ici les services que notre compagnie vous offre</p>

                            <h4 class="text-dark">Details</h4>
                            <div class="job-details-desc-item">
                                <div class="float-left mr-3">
                                    <i class="mdi mdi-minus text-muted f-16"></i>
                                </div>
                                @foreach($services as $services)
                                <p class="text-muted f-14 mb-2"> {{$services -> name}} </p>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-4">Nos Offres</h3>
                </div>
            </div>
            <br><br><br>

            <div class="row">
            <div class="col-lg-9">
                    <div class="row">
                        @foreach($data ->job as $job)
                        <div class="col-lg-4 col-md-6">
                            <div class="list-grid-item mt-4">
                                <div class="grid-item-content p-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item f-15"><span class="badge badge-success">Plein Temps</span></li>
                                        <li class="list-inline-item float-right">
                                            <div class="grid-fev-icon">
                                                <a href="#" class="text-custom"><i class="mdi mdi-heart"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="grid-list-img mt-3">
                                        <img src="{{asset('public/files/logos')}}/{{$job->company->logo}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="grid-list-desc text-center mt-3">
                                        <h5 class="mb-1"><a href="#" class="text-dark">{{$job -> titre}}</a></h5>
                                        <p class="text-muted f-14 mb-1">{{$job -> adresse}}</p>
                                        <p class="text-muted mb-1">{{$job -> salaire}} /mois</p>
                                        <p class="text-muted mb-1">{{$job -> experience}}</p>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">
                                <div class="apply-button text-center mt-2 mb-2">
                                    <a href="{{url('/showjob',$job -> id)}}" class="btn btn-custom btn-sm">Voir</a>
                                </div>
                                @if(Auth::user()->user_type=='Recruteur')
                                        <a href="{{url('/deletejob',$job -> id)}}">
                                            <i class="bi bi-trash "></i>
                                        </a>
                                        <a href="{{url('/editjob',$job -> id)}}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EMPLOYERS DETAILS END -->

    <!-- subscribe start -->
   @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->
@endsection