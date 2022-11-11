<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmCalendarioEvento extends Model
{
    use HasFactory;
    protected $table = 'calendario_eventos';
    protected $fillable = [
        'name',
        'color'
    ];
}
