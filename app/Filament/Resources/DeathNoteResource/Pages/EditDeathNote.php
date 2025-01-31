<?php

namespace App\Filament\Resources\DeathNoteResource\Pages;

use App\Filament\Resources\DeathNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeathNote extends EditRecord
{
    protected static string $resource = DeathNoteResource::class;

    protected static ?string $title = 'Edit Capil Kematian';
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
