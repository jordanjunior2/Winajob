@extends('layouts.main')
@section('content')
<section class="blog-details-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Details de l'Article</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active"> Details</li>
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
                                                <p class="mb-0">View all</p>
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
                    <div class="job-detail mt-4 p-2">
                        <div class="blog-details-img">
                            <img src="{{asset('public/files/Blog/Articles')}}/{{$data->image}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="blog-details meta mt-2">
                            <ul class="list-inline mb-1">
                                <li class="list-inline-item mr-4">
                                    <p class="text-muted mb-0"><i class="mdi mdi-calendar-range mr-1"></i> {{$data -> created_at -> diffForHumans()}} </p>
                                </li>

                                <li class="list-inline-item mr-4">
                                    <p class="text-muted mb-0"><i class="mdi mdi-message-reply-text mr-1"></i>4 Commentaires</p>
                                </li>

                                <li class="list-inline-item">
                                    <p class="text-muted mb-0"><i class="mdi mdi-layers mr-1"></i> {{$data -> categorie -> name}} </p>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-details-desc p-2">
                            <h6 class="mb-3 f-18"><a href="#" class="text-dark"> {{$data -> titre_article}}.</a></h6>

                            <p class="text-muted mb-3 f-13"> {{$data -> description}}.</p>


                            <hr class="mb-2">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mt-1">
                                    <a href="#" class="text-dark">
                                        <p class="mb-0 f-17"><i class="mdi mdi-heart-outline mr-1 text-custom"></i>Liker</p>
                                    </a>
                                </li>
                                <li class="list-inline-item float-right">
                                    <ul class="blog-details-icons list-inline">
                                        <li class="list-inline-item f-16">Partager :</li>
                                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>

                    <h5 class="text-dark mt-4"><i class="mdi mdi-comment-multiple mr-2"></i>4 Commentaires</h5>

                    <div class="job-detail p-4">
                        <div class="media mt-4">
                            <div class="blog-comment-img">
                                <img class="img-fluid d-block mx-auto rounded-circle" alt="" src="images/employers/img-8.jpg">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#" class="text-dark">Ruby Poe</a></h6>
                                <p class="text-muted mb-0">04, Oct, 2018 At 09:35am</p>
                                <p class="text-muted mb-2">Similique sunt in culpa qui officia deserunt mollitia animi id est laborum et dolorum fuga et harum quidem rerum.</p>
                                <p class="mb-0"><a href="#" class="text-muted"><i class="mdi mdi-reply-all mr-2"></i>Reply</a></p>
                            </div>
                        </div>

                        <hr>
                    </div>

                    <h5 class="text-dark mt-4"><i class="mdi mdi-pencil mr-2"></i>Laisser un commentaire</h5>
                    <div class="job-detail p-4">
                        <div class="custom-form">
                            <form name="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-account text-muted f-17"></i>
                                            <input name="name" id="name" type="text" class="form-control blog-details" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-email text-muted f-17"></i>
                                            <input name="email" id="email" type="email" class="form-control blog-details" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group blog-details-form">
                                        <i class="mdi mdi-web text-muted f-17"></i>
                                        <input name="url" id="url" type="url" class="form-control blog-details" placeholder="url">
                                    </div>
                                </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-comment-processing text-muted f-17"></i>
                                            <textarea name="comments" id="comments" rows="4" class="form-control blog-details" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Post comment">
                                    </div>
                                </div>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG LIST END -->

    <!-- subscribe start -->
   @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->

@endsection