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

        // Delete the document when the model is deleted
        static::deleted(function ($model) {
            if ($model->pdf_path) {
                Storage::disk('public')->delete($model->pdf_path);
            }
        });

        // Delete the document if the document is changed
        static::updating(function ($model) {
            // Check if 'pdf_path' is changing
            if ($model->isDirty('pdf_path')) {
                $oldPdf = $model->getOriginal('pdf_path');

                if ($oldPdf) {
                    Storage::disk('public')->delete($oldPdf);
                }
            }
        });
    }
}
