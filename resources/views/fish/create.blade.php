@extends('layouts.app')
@section('content')
<div class="text-center">
  <div> 
    <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Crear pez</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('fish.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Nombre" name="name" value="{{ old('name') }}" />
              <input type="text" class="form-control mb-2" placeholder="Especie" name="specie" value="{{ old('specie') }}" />
              <input type="text" class="form-control mb-2" placeholder="Peso" name="weight" value="{{ old('weight') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection