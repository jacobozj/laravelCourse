@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Estadísticas de Peces</h1>

  <h3>Cantidad de Peces por Especie</h3>
  <ul>
    @foreach ($viewData['fishesPerSpecie'] as $fish)
      <li>{{ $fish->getSpecie() }}: {{ $fish->total }} peces</li>
    @endforeach
  </ul>

    <h3 class="card-title m-0">Pez de Mayor Peso</h3>
  </div>
  <div class="card-body">
    <p class="card-text"><strong>Nombre:</strong> {{ $viewData['heaviestFish']->getName() }}</p>
    <p class="card-text"><strong>Especie:</strong> {{ $viewData['heaviestFish']->getSpecie() }}</p>
    <p class="card-text"><strong>Peso:</strong> {{ $viewData['heaviestFish']->getWeight() }} kg</p>
</div>
@endsection