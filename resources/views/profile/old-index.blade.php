@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-3">
        @if(empty(Auth::user()->profil->avatar))
        <img style="width: 100%" 
        src="{{asset('avatar/caa.png')}}" alt="" srcset="" width="150" height = "200">
        @else
        <img style="width: 100%" 
        src="{{asset('public/files/avatars')}}/{{Auth::user()->profil->avatar}}
        " alt="" srcset="" width="150" height = "200">
        @endif
        
        <form action="{{url('/edituseravatar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <br>
            <div class="card">
                <div class="card-header">Changez Votre Avatar</div>
                <div class="card-body">
                    <input type="file" name="avatar" class="form-control"><br>
                    <button class="btn btn-primary">Télecharger</button>
                </div>
                 <!--ERREUR COVER LETTER!-->
             @if($errors->has('avatar'))
                        <div class="error" style="color:red">
                        {{$errors->first('avatar')}}
                    </div>
                    @endif
            </div>
            </form>
       </div>
       <div class="col-md-5">
            <div class="card">
                <div class="card-header">Editez Vos Informations</div>
                <div class="card-body">

                    <form action="{{url('/editprofiledata')}}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="">Adresse</label>
                        <textarea class="form-control" name="adresse"   rows="3">{{Auth()->user()->profil->adresse}}</textarea>
                    </div>
                    <!--ERREUR ADRESSE!-->
                    @if($errors->has('adresse'))
                        <div class="error" style="color:red">
                        {{$errors->first('adresse')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="">Numéro de Telephone :</label>
                        <input type="text" value="{{Auth::user()->profil->phone_number}}" class="form-control" name="phone_number">
                    </div>
                    <!--ERREUR TELEPHONE!-->
                    @if($errors->has('phone_number'))
                        <div class="error" style="color:red">
                        {{$errors->first('phone_number')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea class="form-control" name="experience"  rows="3">{{Auth::user()->profil->experience}}</textarea>
                    </div>
                    <!--ERREUR EXPERIENCE!-->
                    @if($errors->has('experience'))
                        <div class="error" style="color:red">
                        {{$errors->first('experience')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="">Vos Données Personnelles</label>
                        <textarea class="form-control" name="bio"  rows="3">{{Auth::user()->profil->bio}}</textarea>
                    </div>
                    <!--ERREUR BIO!-->
                    @if($errors->has('bio'))
                        <div class="error" style="color:red">
                        {{$errors->first('bio')}}
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
                    <p><b>Nom Complet :</b> {{Auth::user()->name}}</p>
                    <p><b>Email :</b> {{Auth::user()->email}}</p>
                    <p><b>Adresse :</b> {{Auth::user()->profil->adresse}}</p>
                    <p><b>Numéro de Telephone :</b> {{Auth::user()->profil->phone_number}}</p>
                    <p><b>Experience :</b> {{Auth::user()->profil->experience}}</p>
                    <p><b>Informations Personnelles :</b> {{Auth::user()->profil->bio}}</p>
                    <p><b>Membre depuis :</b> {{date('F d Y',strtotime(Auth::user()->profil->created_at))}}</p>
                    @if(!empty(Auth::user()->profil->cover_letter))
                        <p>
                            <a href="{{Storage::url(Auth::user()->profil->cover_letter)}}">
                                Lettre de Motivation
                            </a>
                        </p>
                    @else
                        <p>
                            Veuillez Télécharger Votre Lettre de Motivation
                        </p>
                    @endif
                    @if(!empty(Auth::user()->profil->cv))
                        <p>
                            <a href="{{Storage::url(Auth::user()->profil->cv)}}">
                                CV
                            </a>
                        </p>
                    @else
                        <p>
                            Veuillez Télécharger Votre CV
                        </p>
                    @endif
                </div><br>
            </div>
            <form action="{{url('/editcoverletter')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-header">Editez Votre Lettre de Motivation</div>
                <div class="card-body">
                    <input type="file" name="cover_letter" class="form-control"><br>
                    <button class="btn btn-primary">Télecharger</button>
                </div>
                <!--ERREUR COVER LETTER!-->
             @if($errors->has('cover_letter'))
                        <div class="error" style="color:red">
                        {{$errors->first('cover_letter')}}
                    </div>
                    @endif
            </div>
             
            </form>
            <form action="{{url('/editcv')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-header">Editez Votre CV</div>
                <div class="card-body">
                    <input type="file" name="cv" class="form-control"><br>
                    <button class="btn btn-primary">Télecharger</button>
                </div>
                 <!--ERREUR CV!-->
             @if($errors->has('cv'))
                        <div class="error" style="color:red">
                        {{$errors->first('cv')}}
                    </div>
                    @endif
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
