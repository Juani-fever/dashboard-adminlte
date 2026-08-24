<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEstudiantes = Estudiante::count();

        return view('dashboard', compact('totalEstudiantes'));
    }
}
