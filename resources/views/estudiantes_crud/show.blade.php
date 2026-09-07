@extends('layouts.admin')

@section('title', 'Dashboard de Estudiantes')

@section('content')

<div class="container">

<h1>Detalle del Estudiante</h1>

<div class="detalle">

    @if($estudiante->foto_perfil)
        <img src="{{ asset('storage/' . $estudiante->foto_perfil) }}" width="120">
    @endif

    <p><strong>{{ $estudiante->nombre }} {{ $estudiante->apellido }}</strong></p>
    <p>DNI: {{ $estudiante->dni }}</p>
    <p>Nacimiento: {{ $estudiante->fecha_nacimiento }}</p>

    <br>

    <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Volver</a>

</div>

</div>

@endsection