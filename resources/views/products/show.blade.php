@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/crear-producto.css') }}" rel="stylesheet">


<div class="container">
    <div class="row">
      <div class="col-md-6">
        <table class="table">
          <tr class="table-active">
            <td>Vendedor</td>
            <td>{{$productos->nombry->nombres}}</td>
          </tr>
          <tr class="table-active">
            <td>Nombre de producto</td>
            <td>{{$productos->nombre}}</td>
          </tr>
          <tr class="table-active">
            <td>Gramos</td>
            <td>{{$productos->gramos}}</td>
          </tr>
          <tr class="table-active">
            <td>Precio</td>
            <td>{{$productos->precio}}</td>
          </tr>
          {{-- <tr>
            <td>Imagen</td>
            <td>{{$products->image}}</td>
          </tr> --}}
{{--           <tr>
            <td>Companie id</td>
            <td>{{$products->companies_id}}</td>
          </tr> --}}


        </table>
      </div>
    </div>
    <hr>
    <a href="{{url('productos')}}" class="btn btn-success">Volver</a>
  </div>


@endsection()
