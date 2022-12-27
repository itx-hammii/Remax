<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class FirstStep extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function SecondStep(): HasOne
    {
        return $this->hasOne(SecondStep::class,'firstStepId');
    }
}
