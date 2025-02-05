<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'photo_path',
        'published_at',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'news_category');
    }

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class, 'news_location');
    }

    protected static function boot()
    {
        parent::boot();

        // Delete image when the model is deleted
        static::deleted(function ($model) {
            if ($model->photo_path) {
                Storage::disk('public')->delete($model->photo_path);
            }
        });

        // Delete old image when updating the model
        static::updating(function ($model) {
            // Check if 'photo_path' is changing
            if ($model->isDirty('photo_path')) {
                $oldImage = $model->getOriginal('photo_path');

                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
