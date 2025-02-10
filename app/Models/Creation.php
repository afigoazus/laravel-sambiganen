<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Creation extends Model
{
    protected $fillable = [
        'title',
        'content',
        'photo_path',
    ];

    protected static function boot()
    {
        parent::boot();

        // Delete the document when the model is deleted
        static::deleted(function ($model) {
            if ($model->photo_path) {
                Storage::disk('public')->delete($model->photo_path);
            }
        });

        // Delete the document if the document is changed
        static::updating(function ($model) {
            // Check if 'pdf_path' is changing
            if ($model->isDirty('photo_path')) {
                $oldPdf = $model->getOriginal('photo_path');

                if ($oldPdf) {
                    Storage::disk('public')->delete($oldPdf);
                }
            }
        });
    }
}
