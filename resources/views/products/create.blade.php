@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/crear-producto.css') }}" rel="stylesheet">


 <form action="{{route('productos.store')}}" method="post">
  @csrf
      
    <section class="form-register">
      <h3>Producto Nuevo</h3>
      <input class="controls" type="text" name="idvendores" placeholder="id vendedores">
      <input class="controls" type="text" name="nombre" placeholder="Ingrese su nombre">
      <input class="controls" type="text" name="gramos" placeholder="gramos">
      <input class="controls" type="text" name="precio" placeholder="precio">

      <!-- aqui ira la imagen del producto -->
      {{-- <div class="form-group">
        <label for="exampleFormControlFile1">Seleccione el archivo</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
      </div> --}}
      <!--  -->
      <input class="btn botons" type="submit" value="Crear Nuevo Producto">
      <a class="cancelar " href="{{url('productos')}}">Cancelar</a>

    </section>
  </form>


@endsection()
