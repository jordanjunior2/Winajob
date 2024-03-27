<!-- all jobs start -->
<section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h4>Trouvez Vos Offres d'Emploi</h4>
                        <p class="text-muted mb-1">Quelques offres</p>
                        <div class="title-icon position-relative">
                            <i class="mdi mdi-chevron-down position-relative h3 text-custom bg-light"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills job-tab justify-content-center mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="recent-job-tab" data-toggle="pill" href="#recent-job" role="tab" aria-controls="recent-job" aria-selected="true">Offres Récentes</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="part-job-tab" data-toggle="pill" href="#part-job" role="tab" aria-controls="part-job" aria-selected="false">Temps Partiel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="full-job-tab" data-toggle="pill" href="#full-job" role="tab" aria-controls="full-job" aria-selected="false">Plein Temps</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @include('job/RecentJobs')

                        @include('job/part')
                        
                        @include('job/full')
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end containar -->
    </section>
    <!-- all jobs end -->