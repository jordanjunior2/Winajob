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