<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
