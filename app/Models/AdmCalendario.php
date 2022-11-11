<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmCalendario extends Model
{
    use HasFactory;
    protected $table = 'calendarios';
    protected $dates = ['starting_at', 'ending_at'];
    protected $fillable = [
        'user_id',
        'title',
        'starting_at',
        'ending_at',
        'calendario_eventos_id'
    ];

    public function evento() {
        return $this->hasOne(CalendarioEvento::class, 'id', 'calendario_eventos_id');
    }
}
