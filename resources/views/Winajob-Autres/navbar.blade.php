 <!-- Navigation Bar-->
 <header id="topnav" class="defaultscroll scroll-active">
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +237 000 000 000
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> Winajob@mail.com
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                    @if(Auth()->check() && Auth::user() -> user_type == 'Demandeur')
                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i> {{Auth::user() -> name}} </a></li>
                    @endif
                    @if(Auth()->check() && Auth::user() -> user_type == 'Recruteur')
                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i> {{Auth::user() -> company -> cname}} </a></li>
                    @endif
                    @guest
                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i> Visiteur </a></li>
                    @endguest
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">
                                <select id="select-lang" class="demo-default" placeholder="Langue">
                                    <option value="">Langue</option>
                                    <option value="4">Anglais</option>
                                    <option value="3">Francais</option>  
                                </select>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="{{route('accueil')}}" class="logo">
                    <img src="{{asset('logo.png')}}" alt="" class="logo-light" width="100" />
                    <img src="{{asset('logo.png')}}" alt="" class="logo-dark" width="100" />
                </a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">

                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">

                <!-- Navigation Menu-->
            
            <ol class="navigation-menu">
            @if(!(Auth()->check() && Auth::user() -> user_type == 'Recruteur' ))
                    <li class="has-submenu">
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Jobs</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('/showalljobs')}}">Liste des Offres</a>
                            </li>
                        </ul>
                        
                    </li>
                    @guest
                    <li class="has-submenu">
                        <a href="#">Recruteurs</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('/company/list')}}">Listes des Compagnies</a>
                            </li>
                        </ul>
                    </li>
                    @endguest
                    @endif
                    <li class="has-submenu">
                        <a href="#">Pages</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('/about')}}">A Propos de Nous</a>
                            </li>
                            <li>
                                <a href="{{url('/calls/interview')}}">Appels</a>
                            </li>
                            <li>
                                <a href="faq.html">Faqs</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="has-submenu">
                        <a href="{{url('/contact')}}">contact</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Blog</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('/blog')}}">Grille des Articles</a>
                            </li>
                            @if(Auth()->check() && Auth::user() -> user_type == 'Recruteur')
                            <li>
                                <a href="{{url('/blog/create')}}">Nouvel Article</a>
                            </li>
                            <li>
                                <a href="{{url('/blog/mypost')}}">Vos Articles</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @guest
                    <li class="has-submenu">
                        <a href="#ModalCenter" class="nav-link" data-toggle="modal" data-target="#ModalCenter">Connexion</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#ModalCenter1" class="nav-link" data-toggle="modal" data-target="#ModalCenter1">Inscription</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Pour Recruteurs</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a a href="#ModalCenter2" class="nav-link" data-toggle="modal" data-target="#ModalCenter2">Inscription</a>
                            </li>
                        </ul>
                    </li>
                    @endguest
                   
                    </ul>
                    @if(Auth()->check() && Auth::user() -> user_type == 'Recruteur')
                    
                <ul class="navigation-menu">
                @if(Auth()->user() -> company -> certification == 'ok')
                <a href="{{url('/job/create')}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-upload"></i> Poster une Offre</a>
                @endif
                    <li class="has-submenu">
                        <a href="#">Candidats</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('/jobs/applicants')}}">Candidatures Retenues</a>
                            </li>
                            <li>
                                <a href="{{url('/showcandidates')}}">Candidatures </a>
                            </li>
                            <li>
                                <a href="{{url('/company/showprofils')}}">Tous les profils</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ url('/showdashboardrecruteur') }}">Dashboard</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Ma Compagnie</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('/company/create')}}">Mon Profil</a>
                            </li>
                            <li>
                                <a href="{{url('/showdashboardrecruteur')}}">Mon Tableau de Bord</a>
                            </li>
                            <li>
                                <a href="{{url('jobs/myjobs')}}">Mes Offres</a>
                            </li>
                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se Deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                    @endif
                    @if(Auth()->check() && Auth::user() -> user_type == 'Demandeur')
                    <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="{{url('/showdashboard1')}}">Dashboard</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Recruteurs</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('/company/list')}}">Listes des Compagnies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Profil</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('user/profile')}}">Mon Profil</a>
                                
                            </li>
                            <li>
                                <a href="{{url('/showdashboarddemandeur')}}">Mon Tableau de Bord</a>
                            </li>
                            <li>
                                <a href="{{url('/cv/create')}}">Créer Mon CV</a>
                            </li>
                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se Deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ol>
                <!-- End navigation menu-->
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->

    <!-- LOG IN FORM START -->
<section class="form-bg">
        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">CONNEXION</h5>
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="custom-form mt-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-account text-muted f-17"></i>
                                            <input id="email" type="email" class="form-control blog-details f-15 pt-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus >
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-lock text-muted f-17"></i>
                                            <input id="password" type="password" class="form-control  blog-details f-15 pt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de Passe">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="custom-control custom-checkbox pl-0 mb-1 mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck1">Se Souvenir de moi</label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item float-right">
                                                <p class="mb-0">@if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('?') }}
                                                    </a>
                                                    @endif
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" id="submit2" name="submit" class="btn-block btn btn-custom" value="Log In">
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
    <!-- LOG IN FORM END -->
    <!-- SING IN FORM START -->
   
<section class="form-bg">
        <div class="modal fade" id="ModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">INSCRIPTION POUR DEMANDEURS D'EMPLOI</h5>
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       
                        <div class="custom-form mt-4">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden" value="Demandeur" name="user_type">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-account text-muted f-17"></i>
                                            <input id="name" type="text" class="form-control blog-details f-15 pt-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom Complet">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-email text-muted f-17"></i>
                                            <input id="email" type="email" class="form-control blog-details f-15 pt-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse Mail">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="fa fa-calendar-check text-muted f-17"></i>
                                            <input id="dob" type="date" class="form-control blog-details f-15 pt-2 @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" placeholder="Date de Naissance">

                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class=" text-muted f-17"></i>
                                            <input type="radio" value="Homme" name="genre">&nbsp;Homme
                                            <input type="radio" value="Femme" name="genre">&nbsp;Femme
                                            <input type="radio" value="null" name="genre">&nbsp;Ne rien dire
                                                @error('genre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-lock text-muted f-17"></i>
                                            <input id="password" type="password" class="form-control blog-details f-15 pt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de Passe">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-lock text-muted f-17"></i>
                                            <input id="password-confirm" type="password" class="form-control blog-details f-15 pt-2" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez Votre Mot de Passe">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" id="submit3" name="submit" class="btn-block btn btn-custom" value="S'Inscrire" placeholder="Confirmez Votre Mot de Passe">
                                    </div>
                                </div>

                                <div class="job-single-or mt-4 mb-4 position-relative">
                                    <h5 class="mb-0 text-dark text-center">OU</h5>
                                </div>
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item mr-1">
                                        <a href="#" class="text-white">
                                            <div class="sing-form-icon bg-primary rounded">
                                                <h6 class="mb-0"><i class="mdi mdi-facebook mr-1"></i>Facebook</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-inline-item mr-1">
                                        <a href="#" class="text-white">
                                            <div class="sing-form-icon bg-info rounded">
                                                <h6 class="mb-0"><i class="mdi mdi-twitter mr-1"></i>Twitter</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-inline-item mr-1">
                                        <a href="#" class="text-white">
                                            <div class="sing-form-icon bg-danger rounded">
                                                <h6 class="mb-0"><i class="mdi mdi-google-plus mr-1"></i>Google</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SING IN FORM END -->


    <!-- SING IN FORM EMPLOYER BEGIN -->
    <section class="form-bg">
        <div class="modal fade" id="ModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">INSCRIPTION POUR RECRUTEURS (Si vous etes un travailleur independant,entrer votre nom comme nom de l'entreprise)</h5>
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       
                        <div class="custom-form mt-4">
                            <form method="POST" action="{{url('/employerregister')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden" value="Recruteur" name="user_type">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-account text-muted f-17"></i>
                                            <input id="name" type="text" class="form-control blog-details f-15 pt-2 @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname') }}" required autocomplete="cname" autofocus placeholder="Nom de l'Entreprise">
                                            @error('cname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-email text-muted f-17"></i>
                                            <input id="email" type="email" class="form-control blog-details f-15 pt-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse Mail">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-lock text-muted f-17"></i>
                                            <input id="password" type="password" class="form-control blog-details f-15 pt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de Passe">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-lock text-muted f-17"></i>
                                            <input id="password-confirm" type="password" class="form-control blog-details f-15 pt-2" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez le Mot de Passe">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" id="submit3" name="submit" class="btn-block btn btn-custom" value="S'Inscrire" placeholder="Confirmez Votre Mot de Passe">
                                    </div>
                                </div>

                                <div class="job-single-or mt-4 mb-4 position-relative">
                                    <h5 class="mb-0 text-dark text-center">OU</h5>
                                </div>
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item mr-1">
                                        <a href="#" class="text-white">
                                            <div class="sing-form-icon bg-primary rounded">
                                                <h6 class="mb-0"><i class="mdi mdi-facebook mr-1"></i>Facebook</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-inline-item mr-1">
                                        <a href="#" class="text-white">
                                            <div class="sing-form-icon bg-info rounded">
                                                <h6 class="mb-0"><i class="mdi mdi-twitter mr-1"></i>Twitter</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-inline-item mr-1">
                                        <a href="#" class="text-white">
                                            <div class="sing-form-icon bg-danger rounded">
                                                <h6 class="mb-0"><i class="mdi mdi-google-plus mr-1"></i>Google</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SING IN FORM END -->