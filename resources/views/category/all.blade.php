@extends('layouts.main')
@section('content')
 <!-- popular category start -->
 <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h4>Les Différentes Catégories</h4>
                        <p class="text-muted mb-1">Toutes les categories disponibles</p>
                        <div class="title-icon position-relative">
                            <i class="mdi mdi-chevron-down position-relative h3 text-custom bg-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categorie as $data )
                <div class="col-lg-3 col-md-6">
                    <div class="popu-category-box bg-light rounded text-center mt-4 p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-account h2 text-custom"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="f-18 mb-4"><a href="{{url('/jobcategory',$data -> id)}}" class="text-dark">{{$data -> name}}</a></h5>
                            <p class="text-custom mb-0 rounded">  </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-3 col-md-6">
                    <div class="popu-category-box bg-light rounded text-center mt-4 p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-auto-fix h2 text-custom"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="f-18 mb-4"><a href="{{url('/showalljobs')}}" class="text-dark">Toutes Les Offres</a></h5>
                            <p class="text-custom mb-0 rounded">{{$job}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular category end -->
@endsection