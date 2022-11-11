<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmGaleria extends Model
{
    use HasFactory;

    protected $table = 'galerias';
    protected $fillable = [
        'user_id',
        'galerias_categorias_id',
        'image_src',
        'title',
        'desc'
    ];

    public function categoria() {
        return $this->belongsTo(AdmGaleriaCategoria::class, 'id', 'galerias_categorias_id');
    }
}
