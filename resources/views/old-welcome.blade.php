@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-12" id="app">
            
        </div>
        <h1>Les Offres Récentes</h1>
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
                            <button class="btn btn-success btn-sm">Postuler</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
         <a href="{{url('/showalljobs')}}">
         <button style="width: 100%" class="btn btn-warning btn-lg">Afficher Toutes les Offres </button>
         </a>
    </div><br><br>
    <h1>Découvrez Nos Entreprises</h1><br>
    
    <div class="container">
        <div class="row">
        @foreach($companies as $company)
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('public/files/logos')}}/{{$company->logo}}" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">{{$company -> cname}}</h5>
                        <p class="card-text"> {{\Illuminate\Support\Str::limit($company -> description,20 )}}</p>
                        <a href="{{url('/showcompany',$company -> id)}}" class="btn btn-primary">Visiter La Compagnie</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    
</div>
@endsection

