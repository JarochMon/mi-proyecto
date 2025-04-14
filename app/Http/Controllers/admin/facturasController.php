<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class facturasController extends Controller
{
    public function index()
    {
        try {
            session()->flash('success', 'Entrando al dashboard');
            return view('admin.facturas.index');
        } catch (\Throwable $th) {
            session()->flash('error', 'Error entrando al dashboard');
            return view('admin.facturas.index');
        }
    }
}
