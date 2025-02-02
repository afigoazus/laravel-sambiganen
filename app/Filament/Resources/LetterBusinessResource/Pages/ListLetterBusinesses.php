<?php

namespace App\Filament\Resources\LetterBusinessResource\Pages;

use App\Filament\Resources\LetterBusinessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLetterBusinesses extends ListRecords
{
    protected static string $resource = LetterBusinessResource::class;
    protected static ?string $title = 'Surat Keterangan Usaha';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Surat Baru"),
        ];
    }
}
