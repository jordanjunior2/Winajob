@extends('layouts.main')
@section('content')
<section class="section">
<div class="col-md-6">
    <div class="form-group app-label">
        <label for="date-to" class="text-muted">Programmez un entretien</label>
        <input id="date-to" type="datetime-local" class="form-control resume" placeholder="31-March-2019" name="date_entretien">
    </div>
</div>
<a href="{{url('/showcandidates')}}" class="btn btn-custom btn-sm"><i class="mdi mdi-cloud-plus-circle"></i> Valider</a>
</section>

@endsection