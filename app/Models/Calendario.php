<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $dates = ['starting_at', 'ending_at'];

    public function evento() {
        return $this->hasOne(CalendarioEvento::class, 'id', 'calendario_eventos_id');
    }
}
