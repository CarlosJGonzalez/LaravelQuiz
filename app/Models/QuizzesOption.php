<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizzesOption extends Model
{
    use HasFactory;
    public function options()
    {
        return $this->belongsTo(Question::class);
    }

    public function selected_opts()
    {
        //return $this->hasMany(SelectedOption::class);
    }
}
