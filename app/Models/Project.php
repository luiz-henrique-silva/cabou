<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'data_inicio',
        'data_final',
        'integrantes',
        'curso_id',
        'professor_orientador_id',
        'link_github',
        'status',
        'documento',
        'user_id',
    ];
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
