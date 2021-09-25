@extends('layouts.app')

@section('content')
	
	{{-- <a href="{{url('productos')}}" class="btn btn-danger">volver</a> --}}
	<a href="{{route('productos.create')}}" class="btn btn-success">Nuevo Producto</a>

<hr>

<div class="row-">

	<div class="col-md-12-">

		@if(session('producto'))
		<div class="alert alert-success">
			{{ session ('producto')}}
		</div>
		@endif

		@if(session('crear'))
		<div class="alert alert-success">
			{{ session ('crear')}}
		</div>
		@endif

		@if(session('eleminar'))
		<div class="alert alert-danger">
			{{ session ('eleminar')}}
		</div>
		@endif

		<div class="table-responsive ">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>GRAMOS</th>
						<th>PRECIO</th>
						<th>VENDEDOR</th>
						<th>FECHA DE CREACIÓN</th>
						<th>FECHA DE ACTUALIZACIÓN</th>
						<th>ACCIONES</th>
					</tr>
				</thead>
				<tbody>
				@foreach($productos as $producto)
					<tr >
						<td>{{$producto->idproductos}}</td>
						<td>{{$producto->nombre}}</td>
						<td>{{$producto->gramos}}</td>
						<td>{{$producto->precio}}</td>
						<td>{{$producto->nombry->nombres}}</td>
						<td>{{$producto->created_at}}</td>
						<td>{{$producto->updated_at}}</td>
						<td>
							<form action="{{route('productos.destroy', $producto->idproductos)}}" method="post">
								@csrf
								@method('DELETE')

								<a href="{{route('productos.show', $producto->idproductos)}}" class="btn btn-info mt-1 btn-sm">DETALLES</a>

								<a href="{{route('productos.edit', $producto->idproductos)}}" class="btn btn-warning mt-1 btn-sm">EDITAR</a>
								<button class="btn btn-danger mt-1 btn-sm" type="submit">ELEMINAR</button>
							</form>
							 
						</td>
					</tr>
				@endforeach()
				</tbody>
			</table>
		</div>

	</div>
        {{-- {{$productos->links()}} --}}
</div>

@endsection()