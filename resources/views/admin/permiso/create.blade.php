@extends("theme.$theme.layout")

@section ('titulo')
Permisos
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CREAR NUEVO REGISTRO</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('permiso') }}"> Cancelar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> se produjo algun error con los campos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('store_permiso') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">            
            <div class="form-group">
                <strong>NOMBRE</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre">
            </div>
            <div class="form-group">
                <strong>SLUG</strong>
                <input type="text" name="slug" class="form-control" placeholder="Ingrese Slug">
            </div>            
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>        
    </div>   
</form>
@endsection