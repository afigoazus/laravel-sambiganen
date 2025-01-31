<?php

namespace App\Filament\Resources\LetterDeathResource\Pages;

use App\Filament\Resources\LetterDeathResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterDeath extends EditRecord
{
    protected static string $resource = LetterDeathResource::class;
    protected static ?string $title = 'Edit Surat Keterangan Kematian';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
