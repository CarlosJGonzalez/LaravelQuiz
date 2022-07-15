<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function questions()
    {
        return $this->belongsTo(Quiz::class);//class, 'foreign_key','owner_key')
    }

    public function options()
    {
        return $this->hasMany(QuizzesOption::class);//(class, 'foreign_key', 'local_key')
    }
}
