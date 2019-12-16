@extends("theme.$theme.layout")

@section ('titulo')
Permisos
@endsection

@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<h3>Permisos</h3>
		<a href="{{route('crear_permiso')}}" class="btn btn-primary mb-2">Crear</a>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>SLUG</th>
					<th class="width70"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($permisos as $permiso)
				<tr>
					<td>{{$permiso['id']}}</td>
					<td>{{$permiso['nombre']}}</td>
					<td>{{$permiso['slug']}}</td>
					<td>
						<a href="{{route('editar_permiso',['id'=>$permiso['id']])}}" class="btn">Editar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection