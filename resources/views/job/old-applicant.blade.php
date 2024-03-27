@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($applicants as $applicant)
            <div class="card">
                <div class="card-header">{{ $applicant -> titre }}</div>
                <div class="card-body">

                  <table class="table">
                        <thead>
                            <th><b>Nom :</b></th>
                            <th><b>Email :</b></th>
                            <th><b> Adresse :</b></th>
                            <th><b>Numero :</b></th>
                            <th><b> CV :</b></th>
                            <th><b>Lettre De Motivation :</b></th>
                        </thead>
                        @foreach($applicant -> users as $user)
                        <tbody>
                            <tr>
                                <td> {{$user -> name}}</td>
                                <td> {{$user -> email}}</td>
                                <td>{{$user -> profil -> adresse}}</td>
                                <td>{{$user -> profil -> phone_number}}</td>
                                <td>
                                    <a href="{{Storage::url($user -> profil -> cv)}}">
                                        CV
                                    </a>
                                </td>
                                <td>
                                <a href="{{Storage::url($user -> profil -> cover_letter)}}">
                                        Lettre de Motivation
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                  </table>
                </div>
                
            </div>
         @endforeach
        </div>
    </div>
</div>
@endsection
