<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
     protected $fillable =[
        'title',
        'goal',
        'content',
        'person',
        'date',
        'note'
        ];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    
    public function getPaginateByLimit(int $limit_count = 2)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    

}
