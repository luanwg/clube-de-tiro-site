<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    public function calendarioevento() {
        return $this->belongsTo('App\Models\CalendarioEvento', 'calendario_eventos_id', 'id');
    }
}
