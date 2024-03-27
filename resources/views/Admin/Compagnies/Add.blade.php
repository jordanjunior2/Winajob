@extends('Admin.admin')
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajouter une Compagnie</h4>
                    <p class="card-description"> Formulaire d'ajout </p>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}},,
                        </div>
                    @endif
                    <form class="forms-sample" action="{{url('/employerregister')}}" method="post">
                      @csrf
                      <div class="form-group">
                      <input type="hidden" value="Recruteur" name="user_type">
                        <label for="exampleInputName1">Nom de la compagnie</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom" name="cname">
                        @if($errors->has('cname'))
                            <div class="error" style="color:red">
                                {{$errors->first('name')}}
                            </div>
                     @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email">
                        @if($errors->has('email'))
                            <div class="error" style="color:red">
                                {{$errors->first('email')}}
                            </div>
                     @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Mot de Passe</label>
                        <input type="password" class="form-control" id="exampleInputName1" placeholder="Mot de Passe" name="password">
                        @if($errors->has('password'))
                            <div class="error" style="color:red">
                                {{$errors->first('password')}}
                            </div>
                     @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Mot de Passe</label>
                        <input type="password" class="form-control" id="password-confirm" placeholder="Mot de Passe" name="password">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Ajouter</button>
                      <button class="btn btn-light">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>

@endsection