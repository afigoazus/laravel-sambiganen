<?php

namespace App\Filament\Resources\BirthNoteResource\Pages;

use App\Filament\Resources\BirthNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBirthNotes extends ListRecords
{
    protected static string $resource = BirthNoteResource::class;
    protected static ?string $title = 'Capil Kelahiran';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Capil Baru"),
        ];
    }
}
