@extends('layouts.main')
@section('content')

<section class="job-details">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="page-header-title text-center text-white">
                        <h4 class="text-uppercase">Mes Offres</h4>
                        <div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Winajob</a></li>
                                <li class="breadcrumb-item">Jobs</li>
                                <li class="breadcrumb-item active">Mes Offres</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <section class="section">
    <div class="col-lg-9">
                    <div class="row">
                        @foreach($jobs as $job)
                        <div class="col-lg-4 col-md-6">
                            <div class="list-grid-item mt-4">
                                <div class="grid-item-content p-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item f-15"><span class="badge badge-success"> {{$job -> type}} </span></li>
                                        <li class="list-inline-item float-right">
                                            <div class="grid-fev-icon">
                                                <a href="#" class="text-custom"><i class="mdi mdi-heart"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="grid-list-img mt-3">
                                        <img src="{{asset('public/files/logos')}}/{{$job->company->logo}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="grid-list-desc text-center mt-3">
                                        <h5 class="mb-1"><a href="#" class="text-dark">{{$job -> titre}}</a></h5>
                                        <p class="text-muted f-14 mb-1">{{$job -> adresse}}</p>
                                        <p class="text-muted mb-1">{{$job -> salaire_min}} - {{$job -> salaire_max}}</p>
                                        <p class="text-muted mb-1">{{$job -> annee_experience}}</p>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">
                                <div class="apply-button text-center mt-2 mb-2">
                                    <a href="{{url('/showjob',$job -> id)}}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="delete" data-id="{{ $job->id }}">
                                    <i class="bi bi-trash "></i>
                                </a>
                                <a href="{{url('/editjob',$job -> id)}}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
</div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(".delete").on("click", function(){
        var id = $(this).attr("data-id");
        $.ajax({ 
          url: "{{ route('job.delete') }}",
          data: {"id": id,"_token": "{{ csrf_token() }}"},
          type: 'post',
          success: function(result){
              location.reload();
          }
        });
      });
    </script>

    @include('Winajob-Autres.Suscribe')

@endsection