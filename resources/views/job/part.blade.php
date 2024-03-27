<div class="tab-pane fade" id="part-job" role="tabpanel" aria-labelledby="part-job-tab">
                            <div class="row mb-5">
                                <div class="col-lg-12">

                                    <div class="col-lg-12">
                                        @foreach($part as $parts)
                                        <div class="job-box bg-white mt-4">
                                            <div class="p-4">
                                                <div class="row align-items-center">
                                                    <div class="col-md-2">
                                                        <div class="mo-mb-2">
                                                            <img src="{{asset('public/files/logos')}}/{{$parts->company -> logo}}" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div>
                                                            <h5 class="f-18"><a href="#" class="text-dark">{{$parts->titre}}</a></h5>
                                                            <p class="text-muted mb-0">{{$parts->company -> cname}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div>
                                                            <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-custom mr-2"></i>{{$parts->adresse}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div>
                                                            <p class="text-muted mb-0 mo-mb-2"><span class="text-custom"></span>{{$parts -> salaire_min}} - {{$parts -> salaire_max}} FCFA</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div>
                                                            <p class="text-muted mb-0">{{$parts -> type}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 bg-light">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div>
                                                            <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span>{{$parts -> annee_experience}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div><a href="{{url('/showjob',$parts -> id)}}">
                                                            <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> En Savoir plus. </p></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div>
                                                            <a href="{{url('/jobs/applyjob',$parts -> id)}}" class="text-custom">Postuler <i class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>