<?php

namespace App\Models;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchased_plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'daily_income',
        'price',
        'status',
        'start_date',
        'end_date',
        'bank',
        'account_name',
        'account_no',
        'proof',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
