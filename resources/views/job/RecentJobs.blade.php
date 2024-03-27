<div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                            <div class="row mb-5">
                                <div class="col-lg-12">

                                 @foreach($jobs as $job)
                                    <div class="job-box bg-white mt-4">
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="{{asset('public/files/logos')}}/{{$job->company -> logo}}" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">{{$job -> titre}}</a></h5>
                                                        <p class="text-muted mb-0">{{$job -> company -> cname}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-custom mr-2"></i>{{$job -> adresse}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-custom">FCFA</span>{{$job -> salaire_min}} - {{$job -> salaire_max}} FCFA</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0"> {{$job -> type}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience : {{$job -> annee_experience}}</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> <a href="{{url('/showjob',$job -> id)}}">En Savoir Plus</a> </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <a href="#" class="text-custom">Consulter <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>

                            </div>
                            <!-- end row -->
                            
                        </div>