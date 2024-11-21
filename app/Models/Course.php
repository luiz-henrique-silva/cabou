<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function professores()
    {
        return $this->hasMany(Professor::class);
    }
}