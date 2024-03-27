<div class="row">
                <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form" action="{{url('/searchprofile')}}" method="get">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" name="keyword" id="exampleInputName1" class="form-control registration-input-box" placeholder="Que Cherchez Vous?...">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" name="competence" id="exampleInputName1" class="form-control registration-input-box" placeholder="Competence...">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-location-arrow"></i>
                                                    <select id="select-country" class="demo-default" name ="sexe" placeholder="Cherchez un genre...">
                                                        <option value="femme">Femme</option>
                                                        <option value="homme">Homme</option>
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
                                <p class="text-white-50 mb-0"><span class="text-white">Mots Clés :</span> Web designer, UI/UX designer...</p>
                            </div>
                        </div>