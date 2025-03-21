<?php

namespace App\Http\Services;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;

class NewsService
{
    public function getAllNews(): Collection
    {
        $news = News::with(['categories', 'locations'])->get();
        return $news;
    }

    public function getRecentNews()
    {
        $news = News::with(['categories', 'locations'])->latest()->first();
        return $news;
    }

    public function getNews($id)
    {
        $news = News::with(['categories', 'locations'])->where('id', $id)->first();
        return $news;
    }

    public function getNewsExceptId($id)
    {
        $news = News::where('id', '!=', $id)->get();
        return $news;
    }

    public function searchNews($searchTerm = null)
    {
        // Start with a base query builder
        $query = News::with(['categories', 'locations']);

        if ($searchTerm) {
            $query->where(function ($q) use ($searchTerm) {
                // Search in news title
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                    // Search in news categories
                    ->orWhereHas('categories', function ($categoryQuery) use ($searchTerm) {
                        $categoryQuery->where('name', 'LIKE', "%{$searchTerm}%");
                    })
                    // Search in news locations
                    ->orWhereHas('locations', function ($locationQuery) use ($searchTerm) {
                        $locationQuery->where('name', 'LIKE', "%{$searchTerm}%");
                    });
            });
        }

        // Return results ordered by latest first
        return $query->latest()->get();
    }
}
