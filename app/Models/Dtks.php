<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Dtks extends Model
{
    protected $fillable = [
        'name',
        'rt/rw',
        'foto_ktp',
        'foto_kk',
        'foto_rumah',
        'foto_lantai_rumah',
    ];

    protected static function boot()
    {
        parent::boot();

        // Delete images when the model is deleted
        static::deleted(function ($model) {
            foreach (['foto_ktp', 'foto_kk', 'foto_rumah', 'foto_lantai_rumah'] as $field) {
                if ($model->$field) {
                    Storage::disk('public')->delete($model->$field);
                }
            }
        });

        // Delete old images when updating the model
        static::updating(function ($model) {
            foreach (['foto_ktp', 'foto_kk', 'foto_rumah', 'foto_lantai_rumah'] as $field) {
                if ($model->isDirty($field)) {
                    $oldImage = $model->getOriginal($field);

                    if ($oldImage) {
                        Storage::disk('public')->delete($oldImage);
                    }
                }
            }
        });
    }
}
