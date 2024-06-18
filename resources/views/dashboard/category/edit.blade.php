@extends('dashboard.master')
@section('titulo','NuevaCategoria')
@include('layouts/navigation')
@section('contenido')

<main>
    

<div class="container py-4" >

    <h1>MODIFICAR CATEGORIA</h1>
    <form action="{{ url('dashboard/category/'.$category->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" id="name" value="{{$category->nombre}}" placeholder="Ingresa el Nombre categoria">
        </div>
    </div>

    <div class="form-group row">
        <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="fecha" id="fecha" value="{{$category->fecha}}" >
        </div>
    </div>
    

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>
           <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
  </form>  
</div>


</main>
@endsection