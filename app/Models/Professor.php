<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
