@extends('layouts.main')
@section('content')

<section class="edit-company-details">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h4 class="text-uppercase">Mon Profil</h4>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Profil</a></li>
                                <li class="breadcrumb-item active">Editer Mes Informations</li>
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
    <div class="row">
       <div class="col-md-3">
       <div class="employers-details-img mb-2">
                @if(empty(Auth::user()->company->logo))
                <img style="width: 100%" 
                src="{{asset('avatar/caa.png')}}" alt="" class="img-fluid mx-auto d-block">
                @else
            <img src="{{asset('public/files/logos')}}/{{Auth::user() -> company -> logo}}" alt="" class="img-fluid mx-auto d-block">
            @endif

            <form action="{{url('/editcompanylogo')}}" method="post" enctype="multipart/form-data">
                @csrf
                <br>
            <div class="card">
                <div class="card-header">Changez Le Logo de Votre Compagnie</div>
                <div class="card-body">
                    <input type="file" name="logo" class="form-control"><br>
                    <button class="btn btn-primary">Télecharger</button>
                </div>
                 <!--ERREUR COVER LETTER!-->
             @if($errors->has('logo'))
                        <div class="error" style="color:red">
                        {{$errors->first('logo')}}
                    </div>
                    @endif
            </div>
            </form>
        </div>
            
        
       </div>
       <div class="col-md-5">
            <div class="card">
                <div class="card-header">Editez Vos Informations</div>
                <div class="card-body">

                    <form action="{{url('/editcompanyinfos')}}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="">Adresse</label>
                        <textarea class="form-control" name="adresse"   rows="3">
                        
                            </textarea>
                    </div>
                    <!--ERREUR ADRESSE!-->
                    @if($errors->has('adresse'))
                        <div class="error" style="color:red">
                        {{$errors->first('adresse')}}
                    </div>
                    @endif
                    <br>
                    <div class="form-group">
                        <label for="">Numéro de Telephone :</label>
                        <input type="text"  class="form-control" name="phone">
                    </div>
                    <!--ERREUR TELEPHONE!-->
                    @if($errors->has('phone'))
                        <div class="error" style="color:red">
                        {{$errors->first('phone')}}
                    </div>
                    @endif
                    <br>

                    <div class="form-group">
                        <label for="">Site Web :</label>
                        <input type="text"  class="form-control" name="website">
                    </div>
                    <!--ERREUR WEBSITE!-->
                    @if($errors->has('website'))
                        <div class="error" style="color:red">
                        {{$errors->first('website')}}
                    </div> 
                    @endif
                    <br>

                    <div class="form-group">
                        <label for="">Slogan :</label>
                        <input type="text"  class="form-control" name="slogan">
                    </div>
                    <!--ERREUR SLOGAN!-->
                    @if($errors->has('slogan'))
                        <div class="error" style="color:red">
                        {{$errors->first('slogan')}}
                    </div><br>
                    @endif
                    <div class="form-group">
                        <label for="">Descripton</label>
                        <textarea class="form-control" name="description"  rows="3"></textarea>
                    </div>
                    <!--ERREUR DESCRIPTION!-->
                    @if($errors->has('description'))
                        <div class="error" style="color:red">
                        {{$errors->first('description')}}
                    </div>
                    @endif
                    
                    <br>
                    <div class="form-group">
                        <button class="btn btn-success">Enregistrer</button>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    </form>
                </div>
            </div>
       </div>
        <div class="col-md-4">
        <div class="card">
                <div class="card-header">Descripton de l'Utilisateur</div>
                <div class="card-body">
                    <p><b> Nom de l'Entreprise : </b>{{Auth::user()->company->cname}}</p>
                    <p><b> Email de l'Entreprise : </b>{{Auth::user()->company->email}}</p>
                    <p><b> Page de l'Entreprise : </b><a href="{{url('/showcompany',Auth::user()->company->id)}}">Voir</a></p>
                    <p><b> Site Web : </b> {{Auth::user()->company->website}}</p>
                    <p><b> Numero de Telephone : {{Auth::user()->company->phone}}</b></p>
                    <p><b> Slogan : </b> {{Auth::user()->company->slogan}}</p>
                    <p><b> Description : </b> {{Auth::user()->company->description}}</p>
                    
                </div><br>
            </div>
            <form action="{{url('/editcompanycover')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-header">Editez La Photo De Couverture</div>
                <div class="card-body">
                    <input type="file" name="cover_photo" class="form-control"><br>
                    <button class="btn btn-primary">Télecharger</button>
                </div>
                <!--ERREUR COVER PHOTO!-->
             @if($errors->has('cover_photo'))
                        <div class="error" style="color:red">
                        {{$errors->first('cover_photo')}}
                    </div>
                    @endif
            </div>
             
            </form>
           
        </div>
    </div>
</div>
</section>
@endsection