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
        $news = News::with(['categories', 'locations'])->first();
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
}
