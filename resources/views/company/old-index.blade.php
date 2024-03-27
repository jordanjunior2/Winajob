@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="company-profile">
       @if(empty(Auth::user()->company->cover_photo))
        <img style="width: 100%" 
        src="{{asset('avatar/caa.png')}}" alt="" srcset="" width="150" height = "200">
        @else
        <img 
        src="{{asset('public/files/cover_photos')}}/{{Auth::user()->profil->cover_photo}}
        " alt="" srcset="" width="1000px"  height = "300">
        @endif
       </div>
       <div class="company-desc"><br>
       @if(empty(Auth::user()->company->logo))
        <img  
        src="{{asset('avatar/caa.png')}}" alt="" srcset="" width="200" >
        @else
        <img
        src="{{asset('public/files/logos')}}/{{Auth::user()->company->logo}}
        " alt="" srcset="" width="100" >
        @endif
        <br>
            <h1>{{$data->cname}} </h1>
            <p>{{$data->description}}</p>
            <p>
                <b>Slogan :</b>&nbsp;{{$data->slogan}}
            </p>
            <p>
                <b>Adresse :</b>&nbsp;{{$data->adresse}}
            </p>
            <p>
                <b>Numero :</b>&nbsp;{{$data->phone}}
            </p>
            <p>
                <b>Site Web :</b>&nbsp;{{$data->website}}
            </p>
       </div>
       <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($data->job as $job)
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
                    <!--
                    <td>
                        <a href="{{url('/showjob',$job -> id)}}">
                            <button class="btn btn-success btn-sm">Postuler</button>
                        </a>
                    </td>
                            -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
