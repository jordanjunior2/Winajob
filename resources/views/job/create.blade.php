@extends('layouts.main')
@section('content')

<section class="post-a-job-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Poster une Offre</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item active">Poster une Offre</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="post-job bg-white p-4">
                        <div class="custom-form">
                            <div id="message3">
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif
                            </div>
                            <form method="post" action="{{url('/uploadpost')}}" name="contact-form" id="contact-form3">
                                @csrf
                                <h4 class="text-dark mb-4">Poster une Nouvelle Offre</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="company-name" class="text-muted">Titre de l'Offre</label>
                                            <input id="company-name" name="titre" type="text" class="form-control resume" placeholder="Titre de l'offre">
                                            @if($errors->has('titre'))
                                                <div class="error" style="color:red">
                                                {{$errors->first('titre')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="job-type" class="text-muted">Type d'emploi</label>
                                            <div class="form-button">
                                                <select name="type" class="form-control">
                                                    <option data-display="Job Type">Job Type</option>
                                                    <option value="temps plein">Temps Plein</option>
                                                    <option value="temps partiel">Temps Partiel</option>
                                                    <option value="volontariat">volontariat</option>
                                                    <option value="freelance">Freelance</option>
                                                </select>
                                                @if($errors->has('type'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('type')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="category" class="text-muted">Job Category</label>
                                            <div class="form-button">
                                                <select name="categorie" class="form-control">
                                                <option>Selectionnez une catégorie</option>
                                                    @foreach(App\Models\Categorie::all() as $cat)
                                                    <option value ="{{$cat -> id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('categorie'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('categorie')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="city" class="text-muted"> Ville</label>
                                            <input id="city" name="ville" type="text" class="form-control resume" placeholder="">
                                            @if($errors->has('ville'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('ville')}}
                                                    </div>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="country" class="text-muted">Pays</label>
                                            <div class="form-button">
                                                <input type="text" class="form-control resume" name="pays" id="" value="Cameroun">
                                                @if($errors->has('pays'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('pays')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="minimum-salary" class="text-muted">Salaire Minimum</label>
                                            <input id="minimum-salary" name="salaire_min" type="text" class="form-control resume" placeholder="8000">
                                            @if($errors->has('salaire_min'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('salaire_min')}}
                                                    </div>
                                                @endif
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="maximum-salary" class="text-muted">Salaire Maximum</label>
                                            <input id="maximum-salary" name="salaire_max" type="text" class="form-control resume" placeholder="20000">
                                            @if($errors->has('salaire_max'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('salaire_max')}}
                                                    </div>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="maximum-salary" class="text-muted">Genre Recherché</label>
                                            <input type="radio" value="Homme" name="genre">&nbsp;Homme
                                            <input type="radio" value="Femme" name="genre">&nbsp;Femme
                                            <input type="radio" value="Les Deux" name="genre">&nbsp;Les Deux
                                                @if($errors->has('genre'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('genre')}}
                                                    </div>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="level" class="text-muted">Niveau d'Etude</label>
                                            <div class="form-button">
                                                <input type="text" class="form-control resume" name="education" id="" >
                                                @if($errors->has('education'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('education')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="experience" class="text-muted">Années d'Experience</label>
                                            <div class="form-button">
                                                <select name="annee_experience" class="form-control">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1 An">1 An</option>
                                                    <option value="2 An">2 Ans</option>
                                                    <option value="3 An">3 Ans</option>
                                                    <option value="4 An">4 Ans</option>
                                                    <option value="5 An">5 Ans</option>
                                                    <option value="5+ An">5+ Ans</option>
                                                </select>
                                                @if($errors->has('annee_experience'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('annee_experience')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="url" class="text-muted">Site Web</label>
                                            <input id="url" name="website" type="url" class="form-control resume" placeholder="" value="{{Auth::user() -> company -> website}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="url" class="text-muted">Adresse</label>
                                            <input id="url" name="website" type="text" class="form-control resume" placeholder="" value="{{Auth::user() -> company -> adresse}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="email-address" class="text-muted">Email </label>
                                            <input id="email-address" type="text" name="email" class="form-control resume" placeholder="" value="{{Auth::user() -> email}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="number" class="text-muted">Numéro de Téléphone</label>
                                            <input id="number" type="text" name="phone" class="form-control resume" placeholder="" value="{{Auth::user() -> company -> phone_number}}">
                                        </div>
                                    </div>
                            
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="shift" class="text-muted">Statut</label>
                                            <div class="form-button">
                                                <select class="form-control" name="statut">
                                                    <option data-display="Shift">statut</option>
                                                    <option value="disponible">Disponible</option>
                                                    <option value="Non Disponible">Non Disponible</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="shift" class="text-muted">Delai de Candidature</label>
                                            <div class="form-button">
                                                <input type="date" name="last_date" id="" class="form-control resume">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="description" class="text-muted">Responsabilites</label>
                                            <textarea id="description" name="responsabilites" rows="6" class="form-control resume" placeholder=""></textarea>
                                            @if($errors->has('description'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('description')}}
                                                    </div>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="description" class="text-muted">Description de l'emploi</label>
                                            <textarea id="description" name="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                            @if($errors->has('description'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('description')}}
                                                    </div>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-custom btn-sm">  Poster l'Offre </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->

@endsection