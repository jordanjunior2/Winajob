<section class="bg-home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="home-title text-center text-white">
                                <h5 class="small-title text-uppercase f-17 text-white-50 mb-4">Découvrez WinAJob Aujourd'hui</h5>
                                <h1 class="mb-4">Trouvez votre Nouvel Emploi de la manière la plus facile avec WinAJob</h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form" action="{{url('/searchbaraccueil')}}" method="get">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" name="keyword" id="exampleInputName1" class="form-control registration-input-box" placeholder="Mots clé de l'emploi...">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <input type="text" name="location" id="exampleInputName1" class="form-control registration-input-box" placeholder="Une ville particulière?..">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-category" class="demo-default" placeholder="Categories..." name="categorie">
                                                            @foreach(App\Models\Categorie::all() as $cat)
                                                            <option value ="{{$cat -> id}}">{{$cat->name}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom btn-block" value="Rechercher">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <p class="text-white-50 mb-0"><span class="text-white">Mots Clés :</span> Web designer, UI/UX designer, Graphic designer, Developer, PHP, Call center...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->