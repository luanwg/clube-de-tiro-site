<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmNoticias extends Model
{
    use HasFactory;

    protected $table = 'noticias';
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'desc',
        'noticias_categorias_id',
        'text'
    ];

    public function categoria() {
        return $this->belongsTo(AdmNoticiasCategorias::class, 'noticias_categorias_id', 'id');
    }
}
