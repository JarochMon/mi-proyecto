<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $primaryKey = 'id_factura';

    protected $fillable = [
        'id_factura',
        'id_empleado',
        'unidad',
        'pdf_final',
        'estado',
    ];

    /**
     * Obtener los archivos asociados a la factura.
     */
    public function archivos()
    {
        return $this->hasMany(ArchivoFactura::class);
    }

    /**
     * Obtener el empleado asociado a la factura.
     */
    public function empleado()
    {
        return $this->belongsTo(Empleados::class, 'id_empleado');
    }
}
