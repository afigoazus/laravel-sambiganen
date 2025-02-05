<?php

namespace App\Filament\Resources\BudgetResource\Pages;

use App\Filament\Resources\BudgetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBudgets extends ListRecords
{
    protected static string $resource = BudgetResource::class;
    protected static ?string $title = "Anggaran";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Anggaran Baru"),
        ];
    }
}
