<?php

namespace App\Filament\Resources\LetterLostResource\Pages;

use App\Filament\Resources\LetterLostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterLost extends EditRecord
{
    protected static ?string $title = 'Edit Surat Keterangan Kehilangan';
    protected static string $resource = LetterLostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
