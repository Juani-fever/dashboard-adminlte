@extends('layouts.admin')

@section('title', 'Dashboard de Estudiantes')

@section('content')
<h1>Nuevo Estudiante</h1>

<form action="{{ route('estudiantes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <input type="text" name="nombre" placeholder="Nombre">
    </div>

    <div class="form-group">
        <input type="text" name="apellido" placeholder="Apellido">
    </div>

    <div class="form-group">
        <input type="text" name="dni" placeholder="DNI">
    </div>

    <div class="form-group">
        <input type="date" name="fecha_nacimiento">
    </div>

    <div class="form-group">
        <input type="file" name="foto_perfil">
    </div>

    <button class="btn btn-primary">Crear estudiante</button>
    <a href="{{ route('estudiantes.index') }}" class="btn">Cancelar</a>

</form>
@endsection