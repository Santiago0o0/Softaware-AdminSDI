@extends('dashboard.master')
@section('titulo','Mensaje')
@include('layouts/navigation')
@section('contenido')
<h1>Mensaje</h1>
<div id="mensaje">
<div class="container py-4" >
    <h2>{{$msg}}</h2>

    <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
</div>
</div>

<style>
    #mensaje {
        display: flex;
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
    }
</style>

@endsection