<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Empleados;

class empladosController extends Controller
{
    public function index()
    {
        try {
            session()->flash('success', 'Entrando al dashboard');
            return view('admin.empleados.index');
        } catch (\Throwable $th) {
            session()->flash('error', 'Error entrando al dashboard');
            return view('admin.empleados.index');
        }
    }

    public function get(Request $request)
    {
        try {
            $query = Empleados::query();

            if ($request->filled('estado')) {
                $query->where('estado', $request->estado);
            }

            if ($request->filled('area')) {
                $query->where('area', $request->area);
            }

            if ($request->filled('search')) {
                $search = $request->search;
                $query->where(function ($q) use ($search) {
                    $q->where('nombres', 'like', "%$search%")
                        ->orWhere('curp', 'like', "%$search%")
                        ->orWhere('correo', 'like', "%$search%");
                });
            }

            $empleados = $query->paginate(20);

            return response()->json([
                'success' => true,
                'data' => $empleados->items(),
                'pagination' => [
                    'total' => $empleados->total(),
                    'per_page' => $empleados->perPage(),
                    'current_page' => $empleados->currentPage(),
                    'last_page' => $empleados->lastPage()
                ],
                'message' => 'Lista de empleados obtenida correctamente'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener empleados: ' . $e->getMessage()
            ], 500);
        }
    }

}
