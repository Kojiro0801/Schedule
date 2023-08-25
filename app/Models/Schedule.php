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
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orederBy('updated_at','DESC')->limit($limit_count)->get();
    }
}
