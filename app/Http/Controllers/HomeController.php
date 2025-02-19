<?php

namespace App\Http\Controllers;

use App\Http\Services\BudgetService;
use App\Http\Services\CreationService;
use App\Http\Services\DemographicService;
use App\Http\Services\NewsService;
use App\Http\Services\OrganizationService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        protected NewsService $newsService,
        protected CreationService $creationService,
        protected OrganizationService $organizationService,
        protected DemographicService $demographicService,
        protected BudgetService $budgetService,
    ) {}

    public function index()
    {
        $news = $this->newsService->getRecentNews();
        $allNews = $this->newsService->getAllNews();
        $creations = $this->creationService->getAllCreations();
        $organizations = $this->organizationService->getAllOrganizations();
        $demographic = $this->demographicService->getDemographic();

        return view('home', compact('news', 'creations', 'organizations', 'demographic', 'allNews'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function history()
    {
        return view('history');
    }

    public function agenda()
    {
        return view('agenda');
    }
}
