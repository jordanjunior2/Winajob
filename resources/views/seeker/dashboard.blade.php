@extends('layouts.main')
@section('content')

<section class="pricing-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Bienvenu(e) sur votre compte</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

<section class="section"> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mes Candidatures : {{$count}} ') }}</div>

                <div class="col-lg-9">
                    <div class="candidates-listing-item">
                            @foreach($job as $jobs)
                    
                            @foreach($jobs -> job as $user)
                        <div class="list-grid-item mt-4 p-2">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="candidates-img float-left mr-4">
                                        <img src="{{asset('public/files/avatars')}}/{{$user ->company->logo}}" alt="" class="img-fluid d-block rounded">
                                    </div>
                                    <div class="candidates-list-desc job-single-meta  pt-2">
                                        <h5 class="mb-2 f-19"><a href="#" class="text-dark"> {{$user -> }titre} </a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-4">
                                                <p class="text-muted f-15 mb-0"><i class="mdi mdi-account mr-1"></i> {{$user -> company -> cname}} </p>
                                            </li>

                                            <li class="list-inline-item mr-4">
                                                <p class="f-15 mb-0"><a href="#" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i> {{$user  -> adresse}} </a></p>
                                            </li>

                                            <li class="list-inline-item">
                                                <p class="text-muted f-15 mb-0"><i class="mdi mdi-currency-usd mr-1"></i> {{$user  -> salaire_min}}- {{$user  -> salaire_max}} </p>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        <div class="fav-icon">
                                            <i class="mdi mdi-heart f-20 like"></i>
                                        </div>
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="{{url('/showjob',$user -> id)}}" class="btn btn-outline btn-sm">Voir </a>
                                            <a href="{{url('/cancelapplication',$user -> id)}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-plus-circle"></i> Retirer Candidature</a>
                                        </div>
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
    </div>
</div>
</section>
@include('Winajob-Autres.Suscribe')


@endsection