<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias_capacitacion extends Model
{
    use HasFactory;

    protected $table = 'categorias_capacitacion';
    protected $primaryKey = 'id_categoria';
    public $timestamps = true;

    protected $fillable = [
        'nombre_categoria'
    ];

    public function video()
    {
        return $this->belongsTo(Video::class, 'id_categoria', 'id_categoria');
    }
}
