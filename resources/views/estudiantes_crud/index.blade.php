@extends('layouts.admin')

@section('title', 'Dashboard de Estudiantes')

@section('content')

<div class="container">

<h1>Estudiantes</h1>

<a href="{{ route('estudiantes.create') }}" class="btn btn-primary">
    + Nuevo
</a>

<br><br>

<div class="lista">

@foreach($estudiantes as $e)

<div class="item">

    <div class="info">
        
        @if($e->foto_perfil)
            <img src="{{ asset('storage/' . $e->foto_perfil) }}" class="foto">
        @else
            <img src="https://via.placeholder.com/45" class="foto">
        @endif

        <div class="texto">
            <span class="nombre">{{ $e->nombre }} {{ $e->apellido }}</span>
            <span>DNI: {{ $e->dni }}</span>
        </div>

    </div>

    <div class="acciones">
        <a href="{{ route('estudiantes.show', $e->id) }}" class="btn btn-primary">Ver</a>
        <a href="{{ route('estudiantes.edit', $e->id) }}" class="btn btn-warning">Editar</a>

        <form action="{{ route('estudiantes.destroy', $e->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('¿Eliminar?')">
                Eliminar
            </button>
        </form>
    </div>

</div>

@endforeach

</div>

</div>

@endsection