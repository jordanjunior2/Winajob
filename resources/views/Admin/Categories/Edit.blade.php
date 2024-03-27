@extends('Admin.admin')
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Editer une Catégorie</h4>
                    <p class="card-description"> Formulaire d'edition </p>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}},,
                        </div>
                    @endif
                    <form class="forms-sample" action="{{url('/uploadeditcategorie',$data -> id)}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Nom de la catégorie</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom" name="name" value="{{$data -> name}}">
                      </div>
                      <div class="form-group">
                        <label>Importer l"icone</label>
                        <input type="file" name="icone" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Ajouter</button>
                      <button class="btn btn-light">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>

@endsection