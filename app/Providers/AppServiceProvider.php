<?php

namespace App\Providers;

use App\Http\Services\BirthNoteService;
use App\Http\Services\BudgetService;
use App\Http\Services\DeathNoteService;
use App\Http\Services\LetterBusinessService;
use App\Http\Services\LetterCounterService;
use App\Http\Services\LetterDeathService;
use App\Http\Services\LetterIncapacityService;
use App\Http\Services\LetterLostService;
use App\Http\Services\PdfService;
use App\Http\Services\ServiceDependencies;
use App\Models\LetterBusiness;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LetterCounterService::class, function ($app) {
            return new LetterCounterService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(BudgetService $budgetService): void
    {
        // Share budget year list for every view
        View::composer("*", function ($view) use ($budgetService) {
            $budgetYearList = $budgetService->getAvailableYear();
            $view->with('budgetYearList', $budgetYearList);
        });
    }
}
