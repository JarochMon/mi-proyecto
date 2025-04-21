<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivoFactura extends Model
{
    protected $table = 'archivos_facturas';

    protected $primaryKey = 'id_archivo';

    public $timestamps = false;

    protected $fillable = [
        'id_archivo',
        'id_factura',
        'ruta',
        'nombre',
    ];

    /**
     * Obtener los archivos asociados a la factura.
     */
    public function factura()
    {
        return $this->belongsTo(Facturas::class);
    }

}
