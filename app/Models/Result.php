<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'quiz_id'];

    public function quiz()
    {
        return $this->belonsTo(Quiz::class) ;
    }
}
