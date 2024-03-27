@extends('layouts.main')
@section('content')
<section class="pricing-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Tableau de Bord</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">WinAJob</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="text-muted text-center mb-4 f-17">Bienvenu sur votre tableau de bord.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-box list-grid-item p-4 mt-4">
                        <h5 class="text-muted text-center text-uppercase">Un profil particulier?</h5>
                        <div class="pricing-plan-item text-center">
                            <ul class="list-unstyled mb-4">
                                
                                <li class="text-muted"><i class="mdi mdi-minus mr-3"></i>Cherchez vous un profil?</li>
                            </ul>
                            <div class="text-center mt-3">
                                <a href="{{url('/company/showprofils')}}" class="btn btn-block pricing-btn btn-outline">Rechercher un Profil</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box list-grid-item p-4 mt-4">
                        <h5 class="text-muted text-center text-uppercase">Gestion des offres</h5>
                        
                        <div class="pricing-plan-item text-center">
                            <ul class="list-unstyled mb-4">
                                <li class="text-muted"><i class="mdi mdi-minus mr-3"></i>Gérer vos offres</li>
                                
                            </ul>
                            <div class="text-center mt-3">
                                <a href="{{url('/jobs/myjobs')}}" class="btn active btn-block pricing-btn btn-outline">Mes Offres</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box list-grid-item p-4 mt-4">
                        <h5 class="text-muted text-center text-uppercase">Profil</h5>
                        <div class="pricing-plan-item text-center">
                            <ul class="list-unstyled mb-4">
                                <li class="text-muted"><i class="mdi mdi-minus mr-3"></i>Gérer votre profil</li>
                                
                            </ul>
                            <div class="text-center mt-3">
                                <a href="{{url('/editcompanyinfos')}}" class="btn btn-block pricing-btn btn-outline">Mon Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRICING END -->


@endsection