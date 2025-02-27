<?php

namespace App\Http\Controllers;

use App\Http\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function __construct(protected NewsService $newsService) {}
    public function index()
    {
        $allNews = $this->newsService->getAllNews();
        return view("news", compact('allNews'));
    }

    public function get($id)
    {
        $news = $this->newsService->getNews($id);
        $differentNews = $this->newsService->getNewsExceptId($id);
        return view("news-detail", compact('news', "differentNews"));
    }
}
