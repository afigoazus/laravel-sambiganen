<?php

namespace App\Http\Controllers;

use App\Http\Services\BudgetService;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function __construct(protected BudgetService $budgetService) {}
    public function index($year = null)
    {
        $year = $year ?? 2024;
        $budgetData = $this->budgetService->getBudgetData($year);

        return view('budget', compact('budgetData', 'year'));
    }
}
