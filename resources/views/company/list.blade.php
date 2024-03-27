@extends('layouts.main')
@section('content')

<section class="employers-list-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h4 class="text-uppercase">Liste Des Compagnies</h4>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Compagnies</a></li>
                                <li class="breadcrumb-item active">Liste</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
    <!-- REGISTRATION-FORM START -->
    @include('Winajob-Autres.BarreRechercheCompany')
    <!-- REGISTRATION-FORM END -->

    <section class="">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark f-18">Last Activity</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio5">Last 30 days</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            
                            <!-- collapse one end -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        @foreach($datas as $data)
                        <div class="col-lg-4 col-md-6">
                            <div class="list-grid-item mt-4">
                                <div class="grid-item-content p-2">
                                    <div class="employers-list-img mt-3">
                                        <img src="{{asset('public/files/logos')}}/{{$data ->logo}}" alt="" class="img-fluid mx-auto d-block rounded-circle">
                                    </div>
                                    <div class="grid-list-desc text-center mt-4">
                                        <h5 class="mb-1"><a href="#" class="text-dark"> {{$data -> cname}} </a></h5>
                                        <p class="text-muted f-14 mb-0"> {{$data -> slogan}} </p>
                                        <p class="text-muted f-14 mb-0"><i class="mdi mdi-map-marker mr-2"></i> {{$data -> adresse}} </p>
                                        <ul class="employers-icons list-inline mb-1">
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">
                                <div class="apply-button text-center mt-2 mb-2">
                                    <a href="{{url('/showcompany',$data -> id)}}" class="btn btn-custom btn-sm">Consulter La Page</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{$datas -> links('Winajob-Autres.my-paginate')}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->

@endsection