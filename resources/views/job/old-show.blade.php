@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$data->titre}}</div>

                <div class="card-body">
                   <p>
                    <h3>Description</h3>
                    {{$data->description }}bb
                   </p>
                   <p>
                    <h3>Taches</h3>
                    {{$data->roles }}
                   </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Quelques Informations A propos de l'offre</div>

                <div class="card-body">
                   <p>Entreprise : <a href="{{url('/showcompany',$data->company->id)}}"> {{$data->company->cname}} </a></p>
                   <p>Adresse : {{$data->adresse }}</p>
                   <p>Poste de Travail : {{$data->position}}</p>
                   <p>Estimation: {{$data->last_date}}</p>
                </div>
            </div>
           
            <div id="app">
            @if(Auth::user()->user_type=='Demandeur')
            @if(!$data->checkApplication())
            <apply-component : jobid= {{$data->id}}> </apply-component> 
            @endif <br>
                <favorites-component : jobid= {{$data->id}} :faborited={{$data->checkSaved()? 'true':'false'}}> </favorites-component> 
            @endif
            </div>
                
        </div>
    </div>
</div>
@endsection
