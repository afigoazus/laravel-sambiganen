<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $fillable =  [
        'name',
        'pdf_path',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            if ($model->pdf_path) {
                Storage::disk('public')->delete($model->pdf_path);
            }
        });
    }
}
