@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
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
            </div>
        </div>
    </div>
</div>
@endsection
