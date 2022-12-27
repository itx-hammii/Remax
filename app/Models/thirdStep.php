<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class thirdStep extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function FourthStep(): HasOne
    {
        return $this->hasOne(fourthStep::class,'ThirdStepId');
    }


}
