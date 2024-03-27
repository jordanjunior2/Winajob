@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><center> 
                <div class="card-header">Poster Une Offre d'Emploi</div>
                </center>
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}},,
                        </div>
                    @endif
                    <form action="{{url('/uploadjobpost')}}" method="post">
                        @csrf
                    <div class="form-group">
                        <label >Titre :</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                    @if($errors->has('titre'))
                        <div class="error" style="color:red">
                        {{$errors->first('titre')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Roles :</label>
                        <input type="text" name="roles" class="form-control">
                    </div>
                    @if($errors->has('roles'))
                        <div class="error" style="color:red">
                        {{$errors->first('roles')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Description :</label>
                        <textarea name="description" id="" cols="3" rows="3" class="form-control"></textarea>
                    </div>
                    @if($errors->has('description'))
                        <div class="error" style="color:red">
                        {{$errors->first('description')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Poste :</label>
                        <input type="text" name="position" class="form-control">
                    </div>
                    @if($errors->has('position'))
                        <div class="error" style="color:red">
                        {{$errors->first('position')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Categorie :</label>
                        <select name="categorie" class="form-control">
                        <option>Selectionnez une catégorie</option>
                            @foreach(App\Models\Categorie::all() as $cat)
                            <option value ="{{$cat -> id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($errors->has('categorie'))
                        <div class="error" style="color:red">
                        {{$errors->first('categorie')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Adresse :</label>
                        <textarea name="adresse" id="" cols="3" rows="3" class="form-control"></textarea>
                    </div>
                    @if($errors->has('adresse'))
                        <div class="error" style="color:red">
                        {{$errors->first('adresse')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Type :</label>
                        <select name="type" class="form-control">
                            <option value="temps plein">Temps Plein</option>
                            <option value="temps partiel">Temps Partiel</option>
                            <option value="basic">Basic</option>
                        </select>
                    </div>
                    @if($errors->has('type'))
                        <div class="error" style="color:red">
                        {{$errors->first('type')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Statut :</label>
                        <select name="statut" class="form-control">
                            <option value="disponible">Disponible</option>
                            <option value="plus disponible">Plus Disponible</option>
                        </select>
                    </div>
                    @if($errors->has('statut'))
                        <div class="error" style="color:red">
                        {{$errors->first('statut')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label >Date Limite des Candidatures :</label>
                        <input type="date" name="last_date" class="form-control">
                    </div>
                    @if($errors->has('last_date'))
                        <div class="error" style="color:red">
                        {{$errors->first('last_date')}}
                    </div>
                    @endif
                    <br>
                    <div class="form-group">
                        <button class="btn btn-outline-primary">Soumettre</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
