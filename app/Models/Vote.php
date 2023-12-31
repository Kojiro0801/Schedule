<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function options()
    {
        return $this->hasMany(Option::class);
    }

}