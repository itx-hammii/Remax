<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondStep extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ThirdStep(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(thirdStep::class,'SecondStepId');
    }
}
