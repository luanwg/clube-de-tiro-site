<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmNoticiasCategorias extends Model
{
    use HasFactory;

    protected $table = 'noticias_categorias';
    protected $fillable = [
        'category'
    ];

    public function noticias() {
        return $this->hasMany(AdmNoticias::class, 'noticias_categorias_id', 'id');
    }
}
