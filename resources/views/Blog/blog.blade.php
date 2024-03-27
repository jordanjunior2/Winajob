@extends('layouts.main')
@section('content')

<section class="blog-post-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Blog </h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active">Grille des Post</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- BLOG LIST START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <form class="mt-4">
                        <input class="form-control search-form" type="search" placeholder="Search...">
                        <button class="search-button" type="submit"><a href="#" class="text-dark"><span class="mdi mdi-magnify"></span></a></button>
                    </form>

                    <div class="job-detail mt-4">
                        <h5 class="text-dark text-center p-2 mb-0">Categories</h5>
                        <hr class="m-0">
                        <div class="blog-datails-item p-3">
                            <ul class="list-inline mb-0">
                                @foreach(App\Models\Categorie::all() as $cat)
                                <li class="mb-2"><a href="#" class="text-muted"><i class="mdi mdi-chevron-right mr-2"></i> {{$cat -> name}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="job-detail mt-4">
                        <h5 class="text-dark text-center p-2 mb-0">Archives</h5>
                        <hr class="m-0">
                        <div class="blog-datails-item p-3">
                            <ul class="list-inline mb-0">
                                <li class="mb-2"><a href="#" class="text-muted"><i class="mdi mdi-chevron-right mr-2"></i>08 January 2018</a></li>
                                <li class="mb-2"><a href="#" class="text-muted"><i class="mdi mdi-chevron-right mr-2"></i>13 February 2018</a></li>
                                <li class="mb-2"><a href="#" class="text-muted"><i class="mdi mdi-chevron-right mr-2"></i>10 March 2018</a></li>
                                <li class="mb-2"><a href="#" class="text-muted"><i class="mdi mdi-chevron-right mr-2"></i>06 April 2018</a></li>
                                <li class="mb-2"><a href="#" class="text-muted"><i class="mdi mdi-chevron-right mr-2"></i>12 May 2018</a></li>
                                <li class="mb-2"><a href="#" class="text-muted"><i class="mdi mdi-chevron-right mr-2"></i>27 June 2018</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="job-detail mt-4">
                        <h5 class="text-dark text-center p-2 mb-0">Archives</h5>
                        <hr class="m-0">
                        <div class=" p-3">
                            <div class="media">
                                <div class="blog-list-img mr-2">
                                    <img src="images/employers/img-1.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="media-body ml-2">
                                    <p class="mb-0 text-muted mb-0 f-13"><a href="#" class="text-dark">In enime justo rhoncuse ut imperdiete as vitae justo niti nullam.</a></p>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-dark">
                                                <p class="mb-0">Voir Tout</p>
                                            </a>
                                        </li>
                                        <li class="list-inline-item float-right">
                                            <p class="text-dark mb-0">15-Dec-2018</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        @foreach($data as $blog)
                        <div class="col-md-6">
                            <div class="job-detail mt-4">
                                <div class="blog-post-img">
                                    <img src="{{asset('public/files/Blog/Articles')}}/{{$blog->image}}" alt="" class="img-fluid mx-auto d-block rounded-top">
                                </div>
                                <div class="p-2">
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-dark">
                                                <p class="mb-0 f-17"><i class="mdi mdi-heart-outline mr-1 text-custom"></i>Liker</p>
                                            </a>
                                        </li>
                                        <li class="list-inline-item float-right">
                                            <a href="#" class="text-dark">
                                                <p class="text-dark mb-0"><i class="mdi mdi-comment-multiple mr-2"></i>Commenter</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <h6><a href="{{url('/blog/readpost',$blog -> id)}}" class="text-dark">{{$blog -> titre_article}}.</a></h6>
                                    <p class="f-14 text-muted mb-0">\Illuminate\Support\Str::limit($blog -> description,10 )...</p>
                                    <hr class="mt-2 mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-dark">
                                                <p class="mb-0 text-muted"><i class="mdi mdi-account mr-1"></i><span class="text-custom">Par</span> {{$blog -> company -> cname}} </p>
                                            </a>
                                        </li>
                                        <li class="list-inline-item float-right">
                                            <p class="text-muted mb-0"><i class="mdi mdi-calendar-text mr-1"></i> {{$blog -> created_at -> diffForHumans()}} </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{$data -> links('Winajob-Autres.my-paginate')}}
        </div>
    </section>
    <!-- BLOG LIST END -->

    <!-- subscribe start -->
    @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->
@endsection