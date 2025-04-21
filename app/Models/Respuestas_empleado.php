<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Empleados;

class Respuestas_empleado extends Model
{
    use HasFactory;
    protected $table = 'respuestas_empleados';

    // Clave primaria
    protected $primaryKey = 'id_respuesta';

    // Campos asignables masivamente
    protected $fillable = [
        'id_empleado',
        'id_pregunta',
        'respuesta_empleado',
        'es_correcta',
        'created_at',
        'updated_at',
    ];

    // Campos de tipo fecha
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Relación con el modelo Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleados::class, 'id_empleado', 'codigo');
    }

    // Relación con el modelo Pregunta
    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class, 'id_pregunta', 'id_pregunta');
    }
}
