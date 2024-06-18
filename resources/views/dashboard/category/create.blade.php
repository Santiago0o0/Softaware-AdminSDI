@extends('dashboard.master')
@section('titulo','NuevaCategoria')
@include('layouts/navigation')
@section('contenido')

<br>
<div class="bg-success p-2 text-dark bg-opacity-25" id="text1" >CREA UNA NUEVA CATEGORIA</div>
        <br>
        <br>


<div class="container py-4">
  <form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" id="name" placeholder="Ingresa el Nombre categoria">
        </div>
    </div>
    <br>

    <div class="form-group row">
        <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="fecha" id="fecha" >
        </div>
    </div>
<br>
    

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>
           <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
  </form>  
</div>

<style>
    #text1 {
        text-align: center;
    }
</style>

@endsection