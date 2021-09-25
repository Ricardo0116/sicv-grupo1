@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/crear-producto.css') }}" rel="stylesheet">


 <form action="{{route('productos.update', $productos->idproductos)}}" method="post">
  @csrf
  @method('PUT')
      
    <section class="form-register">
      <h3>Producto Nuevo</h3>
      <input class="controls" type="text" placeholder="id vendedores" name="idvendores" value="{{$productos->idvendores}}">
      <input class="controls" type="text" placeholder="Nombre de producto" name="nombre" value="{{$productos->nombre}}">
      <input class="controls" type="text" placeholder="Peso del Producto" name="gramos" value="{{$productos->gramos}}">
      <input class="controls" type="text" placeholder="Precio del Producto" name="precio" value="{{$productos->precio}}">

      <!-- aqui ira la imagen del producto -->
      {{-- <div class="form-group">
        <label for="exampleFormControlFile1">Seleccione el archivo</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
      </div> --}}
      <!--  -->
      <input class="botons" type="submit" value="ACTUALIZAR">
      <a class="cancelar" href="{{url('productos')}}">Cancelar</a>

    </section>
  </form>


@endsection()
