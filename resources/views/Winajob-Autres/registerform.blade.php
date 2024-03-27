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
                                            <input id="password-confirm" type="password" class="form-control blog-details f-15 pt-2 " name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez Votre Mot de Passe">
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