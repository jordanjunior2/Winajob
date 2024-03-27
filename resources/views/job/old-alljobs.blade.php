@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Les Offres Récentes</h1><br>
        <form action="{{url('/jobs/searchjob')}}" method="get">
        <div class="form-inline">
            <div class="form-group">
                <label for="">Mot Clé :</label>
                <input type="text" name="titre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Type d'Emploi :</label>
                <select name="type" class="form-control">
                <option >Selectionnez un type</option>
                            <option value="temps plein">Temps Plein</option>
                            <option value="temps partiel">Temps Partiel</option>
                            <option value="basic">Basic</option>
                        </select>
            </div>
            <div class="form-group">
                <label >catégorie :</label>
                <select name="categorie_id" class="form-control">
                    <option>Selectionnez une catégorie</option>
                            @foreach(App\Models\Categorie::all() as $cat)
                            <option value ="{{$cat -> id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
            </div>
            <div class="form-group">
                <label for="">Adresse :</label>
                <input type="text" name="adresse" class="form-control" id="">
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-dark">Rechercher</button>
            </div>
        </div>
        </form>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td>
                        <img src="{{asset('avatar/caa.png')}}" alt="" srcset="" width="80">
                    </td>
                    <td>
                        Poste : {{$job->position}}
                        <br>
                        Type d'emploi: <i class="fa fa-clock"></i>&nbsp; {{$job->type}}
                    </td>
                    <td>
                        <i class="fa fa-map-marker"></i>&nbsp;Adresse : {{$job -> adresse}}
                    </td>
                    <td>
                       <i class ="fa fa-calendar-check"></i>&nbsp; Date Limite : {{$job -> created_at->diffForHumans()}}
                    </td>
                    <td>
                        <a href="{{url('/showjob',$job -> id)}}">
                            <button  class="btn btn-success btn-sm">Postuler</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$jobs->links()}}
    </div>
</div>
@endsection

