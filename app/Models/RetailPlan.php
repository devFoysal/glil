<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetailPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en', 'name_bn', 'banner',
    ];

    public function lists()
    {
        return $this->hasMany(RetailPlanList::class, 'plan_id');
    }

}