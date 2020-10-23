<?php

namespace App\Http\Controllers;

use App\Models\InputOutput;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_fin = $request->input('fecha_fin');
        $registros = InputOutput::where('created_at', '>=', $fecha_inicio)->where('updated_at', '<=', $fecha_fin)->get();
        return view('reports.report', compact('registros'));
    }
}
