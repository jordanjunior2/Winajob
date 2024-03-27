<div class="tab-pane fade" id="full-job" role="tabpanel" aria-labelledby="full-job-tab">                        
                            <div class="row mb-5">
                                
                                <div class="col-lg-12">
                                @foreach($full as $fulls)
                                    <div class="job-box bg-white mt-4">
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="{{asset('public/files/logos')}}/{{$fulls ->company -> logo}}" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark"> {{$fulls -> titre}} </a></h5>
                                                        <p class="text-muted mb-0"> {{$fulls -> company -> cname}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-custom mr-2"></i> {{$fulls -> adresse}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-custom">$</span> {{$fulls -> salaire_min}} - {{$fulls -> salaire_max}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <p class="text-muted mb-0"> {{$fulls -> type}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> {{$fulls -> annee_experience}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <a href="{{url('/showjob',$fulls -> id)}}" class="text-custom">Postuler <i class="mdi mdi-chevron-double-right"></i></a>
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