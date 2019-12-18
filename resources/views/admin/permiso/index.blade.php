@extends("theme.$theme.layout")

@section ('titulo')
Permisos
@endsection

@section('contenido')
<div class="row">
	<section class="col-12">
		<div class="box box-info">			
			<div class="box-header ui-sortable-handle">
				<i class="fa fa-envelope"></i>
				<h3 class="box-title">PERMISOS</h3>
				<div class="pull-right box-tools">
					<a href="{{route('crear_permiso')}}" class="btn btn-primary btn-sm">
						<i class="fa fa-plus"></i>
					</a>			
				</div>
			</div>
			<div class="box-body">
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
							<td>{{$permiso->id}}</td>
							<td>{{$permiso->nombre}}</td>
							<td>{{$permiso->slug}}</td>
							<td>
								<a href="{{route('editar_permiso',['id'=>$permiso->id])}}" class="btn btn-info">Editar</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="box-footer clearfix">
				{{ $permisos->links() }}
			</div>
		</div>		
	</section>
</div>
@endsection