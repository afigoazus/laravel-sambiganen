<?php

namespace App\Filament\Resources\DeathNoteResource\Pages;

use App\Filament\Resources\DeathNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeathNotes extends ListRecords
{
    protected static string $resource = DeathNoteResource::class;
    protected static ?string $title = 'Capil Kematian';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Capil Baru"),
        ];
    }
}
