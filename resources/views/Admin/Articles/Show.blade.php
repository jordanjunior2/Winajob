@extends('Admin.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recapitulatif des Articles Non Validés</h4>
                    <p class="card-description"> liste 
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Titre Article </th>
                          <th> Entreprise </th>
                          <th> Description </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr>
                          <td> {{$data -> id}} </td>
                          <td> {{$data -> titre_article}} </td>
                          <td> {{$data -> company -> cname}} </td>
                          <td> {{\Illuminate\Support\Str::limit($data -> description,20 )}} </td>
                          <td>
                            <a href="{{url('/deletepost',$data -> id)}}">
                                <i class="bi bi-trash "></i>
                            </a>
                            <a href="{{url('/sendpost',$data -> id)}}">
                                <i class="bi bi-send "></i>
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