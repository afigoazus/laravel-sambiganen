<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterBusiness extends Model
{
    protected $fillable =  [
        'no_letter',
        'name',
        'address',
        'no_ktp',
        'agriculture',
        'industry',
        'trading',
        'stock_breeding',
        'handicraft',
        'service',
        'other',
    ];
}
