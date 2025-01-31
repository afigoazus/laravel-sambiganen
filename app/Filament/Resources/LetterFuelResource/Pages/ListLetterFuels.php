<?php

namespace App\Filament\Resources\LetterFuelResource\Pages;

use App\Filament\Resources\LetterFuelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLetterFuels extends ListRecords
{
    protected static string $resource = LetterFuelResource::class;
    protected static ?string $title = 'Surat Rekomendasi BBM Baru';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Surat Baru"),
        ];
    }
}
