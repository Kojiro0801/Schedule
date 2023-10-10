<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    
    public function plans()
    {
        return $this->belongsTo(Plan::class);
    }
    
    public function votes()
    {
        return $this->belongsTo();
    }
}


