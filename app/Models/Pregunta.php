<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $table = 'preguntas';
    protected $primaryKey = 'id_pregunta';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'id_pregunta',
        'id_video',
        'pregunta'
    ];

    //Relaciónes
    public function video()
    {
        return $this->belongsTo(Video::class, 'id_video', 'id_video');
    }

    public function respuestas() {
        return $this->hasMany(Respuesta::class, 'id_pregunta', 'id_pregunta');
    }

    public function respuestasEmpleados()
    {
        return $this->hasMany(Respuestas_empleado::class, 'id_pregunta', 'id_pregunta');
    }

}
