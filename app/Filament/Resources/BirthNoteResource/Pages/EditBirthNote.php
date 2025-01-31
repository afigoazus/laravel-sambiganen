<?php

namespace App\Filament\Resources\BirthNoteResource\Pages;

use App\Filament\Resources\BirthNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBirthNote extends EditRecord
{
    protected static string $resource = BirthNoteResource::class;
    protected static ?string $title = 'Edit Capil Kelahiran';
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
