<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use NotificationChannels\WebPush\HasPushSubscriptions;


class Empleados extends Model
{
    use HasFactory, Notifiable, HasPushSubscriptions;

    // Tabla asociada al modelo
    protected $table = 'empleados';

    // Clave primaria de la tabla
    protected $primaryKey = 'codigo';

    // Indicar si la clave primaria es incremental
    public $incrementing = false;

    // Indicar el tipo de clave primaria
    protected $keyType = 'int';

    // Deshabilitar las columnas timestamps (created_at, updated_at)
    public $timestamps = false;

    // Campos asignables en la base de datos
    protected $fillable = [
        'nombres',
        'curp',
        'rfc',
        'nss',
        'correo',
        'tipo_sangre',
        'alergias',
        'fecha_contratacion',
        'fecha_nacimiento',
        'telefono',
        'puesto',
        'area',
        'estado',
    ];

    public function respuestas()
    {
        return $this->hasMany(Respuestas_empleado::class, 'id_empleado', 'codigo');
    }

    // Relación con el modelo Calificacion
    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class, 'id_empleado', 'codigo');
    }
}
