@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editando: <b>{{ $brand->name }}</b></h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="{{ route('brand.index') }}">Marcas</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('brand.edit', $brand->id) }}">{{ $brand->name }}</a></li>
        </ol>
      </nav>
@stop

@section('content')
    
      <div class="card">
          <div class="card-header">
            <h1 class="card-title">Edição de Marca</h1>
          </div>

          <div class="card-body">
            <form action="{{ route('brand.update', $brand->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Edição</label>
                    <input type="text" name="name" class="form-control" value="{{ $brand->name }}">
                    <small class="form-text text-muted">Coloque um nome unico</small>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
          </div>
      </div>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop