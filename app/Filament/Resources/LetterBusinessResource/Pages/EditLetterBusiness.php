<?php

namespace App\Filament\Resources\LetterBusinessResource\Pages;

use App\Filament\Resources\LetterBusinessResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterBusiness extends EditRecord
{
    protected static string $resource = LetterBusinessResource::class;
    protected static ?string $title = 'Edit Surat Keterangan Usaha';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
