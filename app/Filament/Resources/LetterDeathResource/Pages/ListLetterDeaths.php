<?php

namespace App\Filament\Resources\LetterDeathResource\Pages;

use App\Filament\Resources\LetterDeathResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLetterDeaths extends ListRecords
{
    protected static string $resource = LetterDeathResource::class;
    protected static ?string $title = 'Surat Keterangan Kematian';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Surat Baru"),
        ];
    }
}
