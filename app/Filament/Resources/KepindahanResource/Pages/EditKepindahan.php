<?php

namespace App\Filament\Resources\KepindahanResource\Pages;

use App\Filament\Resources\KepindahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKepindahan extends EditRecord
{
    protected static string $resource = KepindahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
