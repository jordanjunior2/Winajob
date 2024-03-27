@extends('layouts.main')

@section('content')

<section class="page-header">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h4 class="text-uppercase">Vue des Offres</h4>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Offres</a></li>
                                <li class="breadcrumb-item active">Liste des Offres</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
    <!-- Search Bar -->
    <div class="home-form-position">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="home-registration-form p-4 mb-3">
                                    <form action="{{url('/searchjobcategory')}}" class="registration-form" method="get">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" name="keyword" id="exampleInputName1" class="form-control registration-input-box" placeholder="Mots clé de l'emploi...">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <select id="select-country" class="demo-default" placeholder="Search Location...">
                                                    <input type="text" name="location" id="exampleInputName1" class="form-control registration-input-box" placeholder="Ville...">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <input type="text" name="compagnie" id="exampleInputName1" class="form-control registration-input-box" placeholder="Compagnie...">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom btn-block" value="Rechercher">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- end Search Bar -->

    <section class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results mt-4">
                        <div class="float-left">
                            <h5 class="text-dark mb-0 pt-2">Affichage ( {{$comp}} Jobs & Formations de la catégorie <b> {{$name -> name}}</b>  )</h5>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark f-18">Date Post</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio1">Last Hour</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio2">Last 24 hours</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                    <div class="card-header" id="headingthree">
                                        <h6 class="mb-0 text-dark f-18">Experience</h6>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio13">1Year to 2Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            
                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark f-18">Genre</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                        <input type="radio" value="Homme" name="genre">&nbsp;Homme
                                        <input type="radio" value="Femme" name="genre">&nbsp;Femme
                                        </div>
                                </div>
                            </div>
                            <!-- collapse one end -->

                            

                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapsesix" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesix">
                                    <div class="card-header" id="headingsix">
                                        <h6 class="mb-0 text-dark f-18">Type d'Emploi</h6>
                                    </div>
                                </a>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                                    <div class="card-body p-0">
                                        @foreach($jobs as $job)
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio26" name="customRadio5" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio26">{{$job -> type}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        @foreach($jobs as $job)
                        <div class="col-lg-4 col-md-6">
                            <div class="list-grid-item mt-4">
                                <div class="grid-item-content p-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item f-15"><span class="badge badge-success"> {{$job -> type}} </span></li>
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
                                        <p class="text-muted mb-1">{{$job -> salaire_min}} - {{$job -> salaire_max}} /mois</p>
                                        <p class="text-muted mb-1">{{$job -> experience}}</p>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">
                                <div class="apply-button text-center mt-2 mb-2">
                                    <a href="{{url('/showjob',$job -> id)}}" class="btn btn-custom btn-sm">Voir</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{$jobs -> links('Winajob-Autres.my-paginate')}}
                </div>
            </div>
        </div>
    </section>

    @include('Winajob-Autres.Suscribe')

   

@endsection 