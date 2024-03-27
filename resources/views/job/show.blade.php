@extends('layouts.main')
@section('content')

<section class="job-single-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h4 class="text-uppercase">Details</h4>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/showalljobs')}}">Jobs</a></li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- JOB SINGLE START -->
    <section class="section">
        <div class="container">
            <div class="row">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
                <div class="col-lg-9">
                    <div class="job-detail text-center job-single p-3">
                        <div class="job-single-img mb-2">
                            <img src="{{asset('public/files/logos')}}/{{$company->logo}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class=""><a href="#" class="text-dark">{{$data -> titre}}</a></h3>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-2"><i class="mdi mdi-bank mr-1"></i>{{$company -> cname}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-map-marker mr-1"></i> {{$data -> adresse}} </p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-currency-usd mr-1"></i> {{$data -> salaire_min}} - {{$data -> salaire_max}} </p>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-dark mt-4">Description de l'Offre</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted f-14 mb-3"> {{$data -> description}} </p>
                                    
                                </div>

                                <ul class="list-inline mt-3 mb-0">
                                    <li class="list-inline-item mr-3">
                                        <a href="#" class="text-muted f-15 mb-0"><i class="mdi mdi-earth mr-1"></i> {{$data -> company -> website}} </a>
                                    </li>

                                    <li class="list-inline-item mr-3">
                                        <a href="#" class="text-muted f-15 mb-0"><i class="mdi mdi-download mr-1"></i>Télecharger Info</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-dark mt-4">Education & Experience Requise</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-minus text-muted f-16"></i>
                                        </div>
                                        <p class="text-muted f-14 mb-2"> {{$data -> annee_experience}} </p>
                                        <p class="text-muted f-14 mb-2"> {{$data -> education}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-dark mt-4">Responsabilités</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted f-14 mb-3"> {{$data -> responsabilites}} </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-dark mt-4">Comment Postuler ?</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left job-single-item mr-3">
                                            <p class="text-muted mb-0">1</p>
                                        </div>
                                        <p class="text-muted f-14 mb-3">Avant tout,Prenez la peine de Consulter minutieusement l'offre d'emploi.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left job-single-item mr-3">
                                            <p class="text-muted mb-0">2</p>
                                        </div>
                                        <p class="text-muted f-14 mb-3">Apres cela,constituez votre dossier sous forme numerique car la procédure se fait complètement en ligne.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left job-single-item mr-3">
                                            <p class="text-muted mb-0">3</p>
                                        </div>
                                        <p class="text-muted f-14 mb-0">Postulez.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-dark mt-4">Offres Récentes</h3>
                        </div>
                    </div>
                    @foreach($jobs as $job)
                    <div class="job-list-box mt-2">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="company-logo-img job-single-logo-img">
                                        <img src="{{asset('public/files/logos')}}/{{$job->company->logo}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-10">
                                    <div class="job-list-desc job-single-recent-item">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-1">
                                                <h6 class="mb-2"><a href="#" class="text-dark"> {{$job -> titre}} </a></h6>
                                            </li>

                                            <li class="list-inline-item job-list-btn-space">
                                                <span class="badge badge-success"> {{$job -> type}} </span>
                                            </li>
                                        </ul>

                                        <div class="job-single-meta">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item mr-4">
                                                    <p class="mb-0"><a href="#" class="text-muted"><i class="mdi mdi-map-marker text-custom mr-2"></i> {{$job -> company ->cname}} </a></p>
                                                </li>

                                                <li class="list-inline-item">
                                                    <p class="text-muted mb-0"><i class="mdi mdi-currency-usd text-custom mr-2"></i> {{$job -> salaire_min}}-{{$job -> salaire_max}} /mois </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="job-list-button-sm text-right">
                                        <div>
                                            <a href="{{url('/showjob',$job -> id)}}" class="apply-btn-sm btn-custom">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-5 text-center">
                                <a href="{{url('/showalljobs')}}" class="btn btn-outline">Plus</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="company-brand-logo text-center mt-40">
                        <img src="asset('public/files/logos')}}/{{$data->company->logo}}" alt="" class="img-fluid mx-auto d-block mb-3">
                        <h5 class="text-muted mb-0"><a href="{{url('/showcompany',$company -> id)}}" class="text-muted"><i class="mdi mdi-bank mr-1"></i> {{$company ->cname}} </a></h5>
                    </div>

                    <div class="job-detail job-overview mt-4 mb-4">
                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-security text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Experience</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> annee_experience}} </h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-currency-usd text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Statut</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> statut}} </h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-currency-usd text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Salaire</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> salaire_min}} - {{$data -> salaire_max}} </h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-apps text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Categorie</h5>
                                <hr>
                                
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-human-male-female text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Genre</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> genre}} </h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-calendar-today text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Date Post</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> created_at -> diffForHumans()}} </h6>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Date Limite de Candidature</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> last_date }} </h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-email text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Email</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> company -> email}} </h6>
                            </div>
                        </div>

                        <div class="single-post-item">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-phone-classic text-muted h5"></i>
                            </div>
                            <div class="overview-details">
                                <h5 class="text-muted mb-0">Contact No</h5>
                                <hr>
                                <h6 class="text-black-50 mb-0"> {{$data -> company ->phone}} </h6>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-dark">Localisation de l'offre</h5>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="100%" height="350" style="border: 0" allowfullscreen=""></iframe>
                    </div>

                    <div class="job-details-desc-item mt-2">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-map-marker text-muted f-18"></i>
                        </div>
                        <p class="text-muted f-16 mb-2"> {{$data -> adresse}} </p>
                    </div>
                    @if(Auth()->check())
                    <ul class="job-detail-icons list-inline mt-4">
                        <li class="list-inline-item f-16">Partager :</li>
                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="" data-toggle="modal" data-target="#exampleModalLong"><i class="mdi mdi-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>
                    @endif

                    <div class="mt-4">
                    @if(Auth()->check() && Auth::user()->user_type=='Demandeur')
                    @if(!$data->checkApplication())
                        <a href="{{url('/jobs/applyjob',$data -> id)}}" class="btn btn-custom btn-block btn-sm"><i class="mdi mdi-send mr-2"></i>Postuler à cette Offre</a>
                    @endif
                    @endif
                    </div>

                    <div class="mt-4">
                        <div class="job-single-or position-relative">
                            <h5 class="mb-0 text-dark text-center">OU</h5>n
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="#" class="text-white"><i class="mdi mdi-facebook facebook"></i></a>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="#" class="text-white" ><i class="mdi mdi-google-plus google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB SINGLE END -->

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Transférez cette offre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('/sendjoboffer')}}" method="post">
            @csrf
            <input type="hidden" name="job_id" value="{{$data -> id}}">
            <input type="hidden" name="job_titre" value="{{$data -> titre}}">
            <div class="form-group">
                <label >Votre Nom</label>
                <input type="text" value="{{Auth::user()->name}}" name="your_name" class="form-control">
            </div>
            <div class="form-group">
                <label >Votre Email</label>
                <input type="text" value="{{Auth::user()->email}}" name="your_email" class="form-control">
            </div>
            <div class="form-group">
                <label >Destinataire</label>
                <input type="text"  name="destinataire" class="form-control">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text"  name="friend_email" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection