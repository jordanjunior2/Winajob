@extends('layouts.main')
@section('content')

<section class="create-resume-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="">Entretien</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">WinAJob</a></li>
                                <li class="breadcrumb-item"><a href="#">Mon Profil</a></li>
                                <li class="breadcrumb-item active">Passage Entretien</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <section class="section">
        <div id="app">

        </div>
    </section>

@endsection