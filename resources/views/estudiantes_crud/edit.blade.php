@extends('layouts.admin')

@section('title', 'Dashboard de Estudiantes')

@section('content')
    
<h1>Editar Estudiante</h1>

<form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- FOTO ACTUAL --}}
    @if($estudiante->foto_perfil)
        <div style="text-align:center; margin-bottom:15px;">
            <img src="{{ asset('storage/' . $estudiante->foto_perfil) }}" width="100" style="border-radius:10px;">
            <p style="font-size:12px; color:#666;">Foto actual</p>
        </div>
    @endif

    <div class="form-group">
        <input type="text" name="nombre" value="{{ $estudiante->nombre }}">
    </div>

    <div class="form-group">
        <input type="text" name="apellido" value="{{ $estudiante->apellido }}">
    </div>

    <div class="form-group">
        <input type="text" name="dni" value="{{ $estudiante->dni }}">
    </div>

    <div class="form-group">
        <input type="date" name="fecha_nacimiento" value="{{ $estudiante->fecha_nacimiento }}">
    </div>

    <div class="form-group">
        <input type="file" name="foto_perfil">
        <small style="color:gray;">Dejar vacío para mantener la foto actual</small>
    </div>

    <button class="btn btn-warning">Actualizar</button>
    <a href="{{ route('estudiantes.index') }}" class="btn">Cancelar</a>

</form>

@endsection