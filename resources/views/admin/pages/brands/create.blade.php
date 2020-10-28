@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastro de Marcas</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="{{ route('brand.index') }}">Marcas</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('brand.create') }}">Cadastar</a></li>
        </ol>
      </nav>
@stop

@section('content')
    
      <div class="card">
          <div class="card-header">
            <h1 class="card-title">Cadastrar Nova Marca</h1>
          </div>

          <div class="card-body">
            <form action="{{ route('brand.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Titulo da Marca </label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" value="{{ old('name') }}" id="">
                  @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
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