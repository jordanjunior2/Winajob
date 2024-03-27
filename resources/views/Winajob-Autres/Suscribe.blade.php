 <!-- subscribe start -->
 <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-custom h2"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Recevez des Notifications sur les dernières offres</h5>
                </div>
                <div class="col-lg-8">
                    <div class="subscribe">
                        <form method="post" action="{{url('newsletter')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Entrez votre E-mail " name="email">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-custom">Souscrivez</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->