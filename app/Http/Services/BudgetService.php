<?php

namespace App\Http\Services;

use App\Models\Budget;

class BudgetService
{
    public function getBudgetData(int $year)
    {
        $budgetData = [];

        $budgetData['pendapatan'] = Budget::where('year', $year)->whereHas('budgetCategory', function ($query) {
            $query->where("name", "pendapatan");
        })->get();

        $budgetData['belanja'] = Budget::where('year', $year)->whereHas('budgetCategory', function ($query) {
            $query->where("name", "belanja");
        })->get();

        $budgetData['prioritas'] = Budget::where('year', $year)->whereHas('budgetCategory', function ($query) {
            $query->where("name", "prioritas dana desa");
        })->get();

        $budgetData['pembangunan'] = Budget::where('year', $year)->whereHas('budgetCategory', function ($query) {
            $query->where("name", "Rencana Kegiatan Pembangunan Infrastruktur");
        })->get();

        return $budgetData;
    }

    public function calculateAmountBudget(array $budgetData)
    {
        $budgetAmount = [];

        $budgetAmount['pendapatan'] = $budgetData['pendapatan']->sum('amount');
        $budgetAmount['belanja'] = $budgetData['belanja']->sum('amount');
        $budgetAmount['prioritas'] = $budgetData['prioritas']->sum('amount');
        $budgetAmount['pembangunan'] = $budgetData['pembangunan']->sum('amount');

        return $budgetAmount;
    }

    public function getAvailableYear()
    {
        return Budget::select('year')->distinct()->pluck('year');
    }
}
