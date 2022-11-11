<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmGaleriaCategoria extends Model
{
    use HasFactory;
    protected $table = 'galerias_categorias';
    protected $fillable = [
        'category'
    ];

    public function galeria() {
        return $this->hasMany(AdmGaleria::class, 'galerias_categorias_id', 'id');
    }
}
