@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Marcas</h1>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('brand.index') }}">Marcas</a></li>
        </ol>
      </nav>
      @include('admin.messages.flash')
@stop

@section('content')

      <div class="card">
          <div class="card-header">
            <h2 class="text-center">Cadastro de Marcas</h2>
            <a href="{{ route('brand.create') }}" class="btn btn-md btn-primary">Nova Marca</a>
          </div>
          <div class="card-body">
                              
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                 
                    @foreach ($brands as $brand)
                        <tr>
                            
                            <td>{{ $brand->name }}</td>
                            <td>
                                <a href="{{ route('brand.edit', $brand->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('brand.delete', $brand->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            </td>
        
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
          </div>
          <div class="card-footer">
            {!! $brands->links() !!}
          </div>
      </div>


  

    
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop