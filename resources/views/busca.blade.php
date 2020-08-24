@extends('app')

@section('content')

  <h1 class="mt-2 mb-5 text-center">
    Buscar CEP
  </h1>
  <form action="{{route('buscar')}}" method="GET">
    <div class="form-group">
      <label>CEP</label>
      <input type="text" class="form-control" name="cep">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection