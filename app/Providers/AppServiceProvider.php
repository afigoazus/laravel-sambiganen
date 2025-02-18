<?php

namespace App\Providers;

use App\Http\Services\BudgetService;
use App\Http\Services\LetterCounterService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
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
