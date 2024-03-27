@extends('Admin.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recapitulatif des Catégories</h4>
                    <p class="card-description"> liste 
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Icone </th>
                          <th> Nom </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cat as $data)
                        <tr>
                          <td> {{$data -> id}} </td>
                          <td class="py-1">
                            <img src="{{asset('public/files/categories/icones')}}/{{$data->icone}}" alt="image" />
                          </td>
                          <td> {{$data -> name}} </td>
                          <td>
                            <a href="{{url('/deletecategorie',$data -> id)}}">
                                <i class="bi bi-trash "></i>
                            </a>
                            <a href="{{url('/editcategorie',$data -> id)}}">
                                <i class="bi bi-pencil-square"></i>
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