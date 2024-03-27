@extends('Admin.admin')
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajouter une Catégorie</h4>
                    <p class="card-description"> Formulaire d'ajout </p>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}},,
                        </div>
                    @endif
                    <form class="forms-sample" action="{{url('/addcategorie')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Nom de la catégorie</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom" name="name">
                        @if($errors->has('name'))
                            <div class="error" style="color:red">
                                {{$errors->first('name')}}
                            </div>
                     @endif
                      </div>

                      
                      
                      <div class="form-group">
                        <label>Importer l"icone</label>
                      
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info"  placeholder="Upload Image" name = "icone">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary">Upload</button>
                          </span>
                        </div>
                        
                        @if($errors->has('icone'))
                        <div class="error" style="color:red">
                        {{$errors->first('icone')}}
                        </div>
                        @endif
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Ajouter</button>
                      <button class="btn btn-light">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>

@endsection