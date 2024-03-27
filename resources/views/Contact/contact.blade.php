@extends('layouts.main')
@section('content')

<section class="contact-bg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h1 class="font-weight-light">Contactez Nous</h1>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- MAP START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map">
                        <iframe src="https://maps.google.com/maps?q=yaoundé&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500" style="border: 0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MAP END -->

    <!-- CONTACT START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon mt-1 mr-4">
                                <i class="mdi mdi-earth"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Site Web</h4>
                            <p class="mb-0 text-muted">Winajob.cm</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon mt-1 mr-4">
                                <i class="mdi mdi-cellphone-iphone"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Appelez Nous</h4>
                            <p class="mb-0 text-muted">+237 000 000 000</p>
                            <p class="mb-0 text-muted">+237 000 000 000</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon mt-1 mr-4">
                                <i class="mdi mdi-email"></i>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h4 class="text-dark mb-1">Email</h4>
                            <p class="mb-0 text-muted">Winajob@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

    <!-- CONTACT FORM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-dark font-weight-light">Restez en Contact avec Nous</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail mt-2 p-4">
                        <div class="custom-form">
                            <div id="message"></div>
                            <form method="post" action="{{ url('/contactform')}}" name="contact-form" id="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label for="name" class="text-muted">Nom</label>
                                            <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label for="email" class="text-muted">Email address</label>
                                            <input name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="subject" class="text-muted">Sujet</label>
                                            <input type="text" class="form-control resume" id="subject" placeholder="Subject..">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="comments" class="text-muted">Message</label>
                                            <textarea name="comments" id="comments" rows="5" class="form-control resume" placeholder="Message.."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5">
                    <div class="job-detail text-center mt-2 p-4">
                        <h4 class="text-dark font-weight-light pb-3">Informations de Contact</h4>
                        <div class="contact-location mt-5 p-4">
                            <div class="contact-location-icon">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <p class="text-muted pt-4 f-20 mb-0">Poste,Yaoundé,Cameroun</p>
                        </div>
                        <h5 class="text-muted mt-4 mb-0">Partager</h5>
                        <ul class="blog-details-icons contact-social-icon list-inline mt-2 mb-0">
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END -->

    <!-- subscribe start -->
   @include('Winajob-Autres.Suscribe')
    <!-- subscribe end -->
@endsection