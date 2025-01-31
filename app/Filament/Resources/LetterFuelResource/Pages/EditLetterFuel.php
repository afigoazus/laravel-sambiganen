<?php

namespace App\Filament\Resources\LetterFuelResource\Pages;

use App\Filament\Resources\LetterFuelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterFuel extends EditRecord
{
    protected static string $resource = LetterFuelResource::class;
    protected static ?string $title = 'Edit Surat Rekomendasi BBM';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
