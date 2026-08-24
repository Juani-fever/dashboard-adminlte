@extends('layouts.admin')

@section('title', 'Dashboard de Estudiantes')

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalEstudiantes ?? 0 }}</h3>
                <p>Estudiantes cargados</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <a href="{{ route('estudiantes.index') }}" class="small-box-footer">
                Ver estudiantes <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>CRUD</h3>
                <p>Crear, listar, editar y eliminar</p>
            </div>
            <div class="icon">
                <i class="fas fa-edit"></i>
            </div>
            <a href="{{ route('estudiantes.create') }}" class="small-box-footer">
                Crear estudiante <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>DNI</h3>
                <p>Campo único en la base</p>
            </div>
            <div class="icon">
                <i class="fas fa-id-card"></i>
            </div>
            <a href="{{ route('estudiantes.index') }}" class="small-box-footer">
                Ver listado <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>AdminLTE</h3>
                <p>Plantilla integrada</p>
            </div>
            <div class="icon">
                <i class="fas fa-layer-group"></i>
            </div>
            <a href="#" class="small-box-footer">
                Laravel Blade <i class="fas fa-check-circle"></i>
            </a>
        </div>
    </div>

</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Resumen del proyecto</h3>
    </div>

    <div class="card-body">
        <p>
            Este proyecto utiliza Laravel, Blade y AdminLTE para administrar un CRUD simple de estudiantes.
            El sistema permite cargar nombre, apellido, DNI, fecha de nacimiento y foto de perfil.
        </p>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        console.log("Dashboard de estudiantes cargado correctamente");
    });
</script>
@endpush