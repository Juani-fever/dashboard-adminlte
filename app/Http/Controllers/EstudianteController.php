<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes_crud.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('estudiantes_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $datos = $request->all();

    if ($request->hasFile('foto_perfil')) {
        $ruta = $request->file('foto_perfil')->store('fotos', 'public');
        $datos['foto_perfil'] = $ruta;
    }

    Estudiante::create($datos);

    return redirect()->route('estudiantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes_crud.show', compact('estudiante'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes_crud.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
     $estudiante = Estudiante::findOrFail($id);
    $datos = $request->all();

    if ($request->hasFile('foto_perfil')) {
        $ruta = $request->file('foto_perfil')->store('fotos', 'public');
        $datos['foto_perfil'] = $ruta;
    }

    $estudiante->update($datos);

    return redirect()->route('estudiantes.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $estudiante = Estudiante::findOrFail($id);
    $estudiante->delete();
    return redirect()->route('estudiantes.index');
}
}

