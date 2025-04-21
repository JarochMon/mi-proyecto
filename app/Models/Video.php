<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $primaryKey = 'id_video';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'id_categoria',
        'img',
        'titulo_video',
        'descripcion',
        'url_video',
    ];



    public function categorias_capacitacion()
    {
        return $this->belongsTo(categorias_capacitacion::class, 'id_categoria', 'id_categoria');
    }

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class, 'id_video', 'id_video');
    }

    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class, 'id_video', 'id_video');
    }

}
