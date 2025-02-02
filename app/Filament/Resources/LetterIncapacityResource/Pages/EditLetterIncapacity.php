<?php

namespace App\Filament\Resources\LetterIncapacityResource\Pages;

use App\Filament\Resources\LetterIncapacityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterIncapacity extends EditRecord
{
    protected static string $resource = LetterIncapacityResource::class;
    protected static ?string $title = 'Edit Surat Keterangan Tidak Mampu';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
