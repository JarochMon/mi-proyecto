<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Calificacion extends Model
{
    use HasFactory;

    protected $table = 'calificaciones';

    protected $primaryKey = 'id_calificacion';

    protected $fillable = [
        'id_empleado',
        'id_video',
        'calificacion',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleados::class, 'id_empleado', 'codigo');
    }

    public function video()
    {
        return $this->belongsTo(Video::class, 'id_video', 'id_video');
    }
}
