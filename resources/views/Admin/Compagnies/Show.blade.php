@extends('Admin.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Liste des Entreprises</h4>
                    <p class="card-description"> Liste
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th> Logo </th>
                          <th> Nom </th>
                          <th> Adresse </th>
                          <th> Site Web </th>
                          <th> Action </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($company as $company)
                        <tr>
                        <td> {{$company -> id}} </td>
                          <td class="py-1">
                          @if(empty($company -> logo))
                              <img src="{{asset('avatar.png')}}" alt="profile">
                          @else
                            <img src="{{asset('public/files/logos')}}/{{$company->logo}}" alt="image" />
                          @endif
                          </td>
                          <td> {{$company -> cname}} </td>
                          <td> {{$company -> adresse}} </td>
                          <td> {{$company -> website}} </td>
                          <td>
                          <a href="{{url('/deletecompany',$company -> id)}}">
                                <i class="bi bi-trash "></i>
                            </a>
                            <a href="{{url('/validatecompany',$company -> id)}}">
                                <i class="bi bi-eye "></i>
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