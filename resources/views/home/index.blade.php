@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')
<div class="text-center">
  <div> 
    <a href="{{ route('fish.create') }}" >Registrar peces</a>
    <a href="{{ route('fish.index') }}">Listar peces</a>
    <a href="{{ route('fish.statistics') }}">Estadisticas de peces</a>
  </div>
</div>
@endsection
