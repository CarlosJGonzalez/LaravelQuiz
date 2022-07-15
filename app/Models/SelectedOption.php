<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedOption extends Model
{
    use HasFactory;

    protected $fillable = ['result_id', 'options'] ;
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
