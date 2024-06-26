<?php

namespace App\Http\Controllers;

use App\Models\InputOutput;
use App\Models\Parking;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_fin = $request->input('fecha_fin');

        if(!empty($fecha_inicio) && !empty($fecha_fin)) {
            $registros = InputOutput::where('created_at', '>=', $fecha_inicio)->where('updated_at', '<=', $fecha_fin)->get();
        } else {
            $registros = InputOutput::all();
        }
        $info_parking = Parking::findOrFail(1);
        $pdf = \PDF::loadView('reports.report', compact('registros', 'info_parking'));
        return $pdf->download('reporte.pdf');
    }
}
