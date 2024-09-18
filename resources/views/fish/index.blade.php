@extends('layouts.app')
@section('content')
<div class="row">
  @foreach ($viewData["fish"] as $fish)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title">{{ $fish->getName() }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $fish->getSpecie() }}</h6>
        <p class="card-text">{{ $fish->getWeight() }}</p>
        <p class="card-text">id: {{ $fish->getId() }}</p> 
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
