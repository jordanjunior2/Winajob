@extends('layouts.main')
@section('content')

<section class="create-resume-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="">Créez Votre CV</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Mon Profil</a></li>
                                <li class="breadcrumb-item active">Creer un CV</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->



    <!-- CREATE RESUME START -->
    <section class="section">
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}},,
        </div>
    @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark">Informations Générales</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="resume-user mb-5">
                                    <i class="mdi mdi-account text-white"></i>
                                </div>
                            </div>
                        </div>
                       
                        <div class="custom-form">
                            <form method="post" action="{{url('/uploadcvgeneraldata')}}" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label">
                                            <label for="frist-name" class="text-muted">Nom Complet</label>
                                            <input id="frist-name" type="text" class="form-control resume" placeholder="" name="name" value="{{Auth::user() -> name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label for="date-of-birth" class="text-muted">Date de Naissance</label>
                                            <input id="date-of-birth" type="date" class="form-control resume" placeholder="13-02-1999" name="date_naissance" value="{{Auth::user() -> profil -> date_naissance}}">
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label for="General" class="text-muted">Genre</label>
                                            <div class="form-button">
                                                <select name="genre" class="form-control" value="{{Auth::user() -> profil -> genre}}">
                                                    <option data-display="General">Genre</option>
                                                    <option value="homme">Homme</option>
                                                    <option value="femme">Femme</option>
                                                    <option value="non binaire">Autres</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label for="marital-status" class="text-muted">Situation Marital</label>
                                            <div class="form-button">
                                                <select name ="situation" class="form-control">
                                                    <option data-display="Status">Status</option>
                                                    <option value="celibataire">Célibataire</option>
                                                    <option value="marie">Marié</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <button type="submit" id="submit" name="send" class="submitBnt btn btn-custom mt-5"> Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-5"> Informations de Contact</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                        <div class="custom-form">
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}},,
                        </div>
                        @endif
                            <form  method="post" action="{{url('/uploadcvcontactdata')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label for="citys" class="text-muted">Ville</label>
                                            <div class="form-button">
                                            <input id="ville" type="text" class="form-control resume" placeholder="" name="ville" value="{{Auth::user() -> profil -> ville}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label for="state" class="text-muted">Pays</label>
                                            <div class="form-button">
                                            <input  id="pays" type="text" class="form-control resume" placeholder="" name="pays" value="Cameroun">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label for="phone" class="text-muted">Numéro</label>
                                            <input id="phone" type="text" class="form-control resume" placeholder="" name="phone_number">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label for="e-mail" class="text-muted">E-mail</label>
                                            <input id="e-mail" type="text" class="form-control resume" placeholder="" name="email" value="{{Auth::user() -> email }}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group app-label">
                                            <label for="website" class="text-muted">Portfolio</label>
                                            <input id="website" type="url" class="form-control resume" placeholder="" name="portfolio">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="address">Adresse</label>
                                            <textarea id="address" rows="4" class="form-control resume" placeholder="" name="adresse"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <button type="submit" id="submit" name="send" class="submitBnt btn btn-custom mt-5"> Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-5">Section Education</h3>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                    <form method="post" action="{{url('/uploadcveducationdata')}}">
                             @csrf
                                <div class="row item-content">
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label for="graduation" class="text-muted">Diplome</label>
                                            <input id="graduation" type="text" class="form-control resume" placeholder="" name="diplome">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label for="university/college" class="text-muted">Université/College</label>
                                            <input id="university/college" type="text" class="form-control resume" placeholder="" name="etablissement">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label for="degree/certification" class="text-muted">Certification</label>
                                            <input id="degree/certification" type="text" class="form-control resume" placeholder="" name="certification">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label for="degree/certification" class="text-muted">Filière d'Etude</label>
                                            <input id="degree/certification" type="text" class="form-control resume" placeholder="" name="filiere">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label for="degree/certification" class="text-muted">Debut</label>
                                            <input id="degree/certification" type="date" class="form-control resume" placeholder="" name="debut">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label for="degree/certification" class="text-muted">Fin</label>
                                            <input id="degree/certification" type="date" class="form-control resume" placeholder="" name="fin">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="addition-information">Information Aditionnelles</label>
                                            <textarea id="addition-information" rows="4" class="form-control resume" placeholder="decrivez la filière" name="description_etude"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <button type="submit" id="submit" name="send" class="submitBnt btn btn-custom mt-5"> Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-5">Experience de Travail</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                    <form method="post" action="{{url('/uploadcvexperiencedata')}}">
                             @csrf
                                <div class="row item-content">
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label for="company-name" class="text-muted">Nom Entreprise</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="" name="nom_societe">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label for="job-position" class="text-muted">Poste Occupé</label>
                                            <input id="job-position" type="text" class="form-control resume" placeholder="" name="fonction">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label for="location" class="text-muted">Localisation</label>
                                            <input id="location" type="text" class="form-control resume" placeholder="" name="adresse_societe">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group app-label">
                                                    <label for="date-from" class="text-muted">Date début</label>
                                                    <input id="date-from" type="date" class="form-control resume" placeholder="01-Jan-2018" name="started_at">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group app-label">
                                                    <label for="date-to" class="text-muted">Date Fin</label>
                                                    <input id="date-to" type="date" class="form-control resume" placeholder="31-March-2019" name="finished_at">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="addition-information-1">Addition Information</label>
                                            <textarea id="addition-information-1" rows="4" class="form-control resume" placeholder="Donnez un peu plus de details sur votre poste" name="taches"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <button type="submit" id="submit" name="send" class="submitBnt btn btn-custom mt-5"> Ajouter</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </form>    
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-5">Compétences</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="job-detail mt-2 p-4">
                    <form method="post" action="{{url('/uploadcvskilldata')}}">
                                @csrf
                                <div class="row item-content">
                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="skills" class="text-muted">Compétenes</label> 
                                            <input id="skills" type="text" class="form-control resume" placeholder="HTML, CSS, PHP, javascript, ..." name="nom_competence">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="skill proficiency" class="text-muted">Degré de Maitrise</label>
                                            <input id="skill proficiency" type="text" class="form-control resume" placeholder="75%" name="degre">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <button type="submit" id="submit" name="send" class="submitBnt btn btn-custom mt-5"> Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                             </form>
                       
                    </div>
                </div>
            </div>


            
        </div>
    </section>
    <!-- CREATE RESUME END -->

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->
    

@endsection