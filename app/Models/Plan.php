<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class Plan extends Model
{
    use HasFactory;
    
    public function options()
    {
        return $this->hasMany(Option::class);
    }
    
    public function getByPlan()
{
     return $this->options()->with('plan')->get();
}

 public function getFirstOption()
{
     return $this->options()->with('plan')->first();
}

}
