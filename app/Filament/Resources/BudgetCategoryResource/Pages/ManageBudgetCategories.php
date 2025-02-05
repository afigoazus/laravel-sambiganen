<?php

namespace App\Filament\Resources\BudgetCategoryResource\Pages;

use App\Filament\Resources\BudgetCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBudgetCategories extends ManageRecords
{
    protected static string $resource = BudgetCategoryResource::class;
    protected static ?string $title = "Kategori Anggaran";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Kategori Anggaran Baru"),
        ];
    }
}
