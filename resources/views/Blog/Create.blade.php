@extends('layouts.main')
@section('content')

<section class="blog-list-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Volet Blog</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active">Poster un Article</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->


    <!-- POST A JOB START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="post-job bg-white p-4">
                        <div class="custom-form">
                            <div id="message3">
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif
                            </div>
                            <form method="post" action="{{url('/uploadblogpost')}}" name="contact-form" id="contact-form3"  enctype="multipart/form-data">
                                @csrf
                                <h4 class="text-dark mb-4">Poster un Nouvel <Article></Article></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="company-name" class="text-muted">Titre de l'Article</label>
                                            <input id="company-name" name="titre_article" type="text" class="form-control resume" placeholder="Titre de l'offre">
                                            @if($errors->has('titre_article'))
                                                <div class="error" style="color:red">
                                                {{$errors->first('titre_article')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="category" class="text-muted"> Categorie</label>
                                            <div class="form-button">
                                                <select name="categorie" class="form-control">
                                                <option>Selectionnez une catégorie</option>
                                                    @foreach(App\Models\Categorie::all() as $cat)
                                                    <option value ="{{$cat -> id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('categorie'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('categorie')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="description" class="text-muted">Contenu</label>
                                            <textarea id="description" name="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                            @if($errors->has('description'))
                                                    <div class="error" style="color:red">
                                                    {{$errors->first('description')}}
                                                    </div>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="card-header">Image</div>
                                                <div class="card-body">
                                                    <input type="file" name="image" class="form-control"><br>
                                                </div>
                                                <!--ERREUR COVER LETTER!-->
                                                @if($errors->has('image'))
                                                <div class="error" style="color:red">
                                                {{$errors->first('image')}}
                                                </div>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-custom btn-sm">  Poster l'Offre </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->

@endsection