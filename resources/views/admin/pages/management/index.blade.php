@extends('adminlte::page')

@section('title', 'Gestão Central')

@section('content_header')
    <h1>Gestão</h1>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('management.index') }}">Gestão</a></li>
        </ol>
      </nav>
      @include('admin.messages.flash')
@stop
@section('content')

<div class="row">

  <div class="col-sm">
    <div class="card">
      <div class="card-header">
        <h2>Notas Fiscais</h2>
      </div>
      <div class="card-body">
        <p>Cadastre a nota fiscal do item</p>
      </div>
      <div class="card-footer">
        <a href="" class="btn btn-md btn-success">Acessar</a>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="card">
      <div class="card-header">
        <h2>Cadastro de Marcas</h2>
      </div>
      <div class="card-body">
        <p>Cadastro de marcas disponiveis</p>
      </div>
      <div class="card-footer">
        <a href="{{ route('brand.index') }}" class="btn btn-md btn-success">Acessar</a>
      </div>
    </div>
  </div>


  <div class="col-sm">
    <div class="card">
      <div class="card-header">
        <h2>Cadastro de Modelos</h2>
      </div>
      <div class="card-body">
        <p>Cadastro para modelos</p>
      </div>
      <div class="card-footer">
        <a href="" class="btn btn-md btn-success">Acessar</a>
      </div>
    </div>
  </div>


  
</div>



@stop
