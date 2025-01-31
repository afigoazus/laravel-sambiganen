<?php

namespace App\Filament\Resources\LetterLostResource\Pages;

use App\Filament\Resources\LetterLostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLetterLosts extends ListRecords
{
    protected static ?string $title = 'Surat Keterangan Kehilangan';
    protected static string $resource = LetterLostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Surat Baru"),
        ];
    }
}
