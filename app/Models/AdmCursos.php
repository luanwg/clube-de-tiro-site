<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmCursos extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = [
        'name',
        'price',
        'mini_desc',
        'full_desc',
        'icon'
    ];
}
