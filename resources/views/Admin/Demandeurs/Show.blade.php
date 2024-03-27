@extends('Admin.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recapitulatif des Utilisateurs(Demandeurs d'emploi)</h4>
                    <p class="card-description"> liste 
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Avatar </th>
                          <th> Nom </th>
                          <th> Email </th>
                          <th> Adresse </th>
                          <th> Numero </th>
                          <th> Ville</th>
                          <th> Sexe </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr>
                          <td> {{$data -> id}} </td>
                          <td class="py-1">
                          @if(empty($data -> profil -> avatar))
                              <img src="{{asset('avatar.png')}}" alt="profile">
                          @else
                            <img src="{{asset('public/files/avatars')}}/{{$data -> profil -> avatar}}" alt="image" />
                          @endif
                          </td>
                          <td> {{$data -> name}} </td>
                          <td> {{$data -> email}} </td>
                          <td> {{$data -> profil -> adresse}} </td>
                          <td> {{$data -> profil -> phone_number}} </td>
                          <td> {{$data -> profil -> ville}} </td>
                          <td> {{$data -> profil -> sexe}} </td>
                          <td>
                            <a href="{{url('/deleteuser',$data -> id)}}">
                                <i class="bi bi-trash "></i>
                            </a>
                            <a href="{{url('/notifyuser',$data -> id)}}">
                                <i class="bi bi-mail "></i>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

@endsection