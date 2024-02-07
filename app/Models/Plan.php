<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public function purchasedPlans()
    {
        return $this->hasMany(Purchased_plan::class, 'plan_id');
    }
}
