<?php

namespace App\Filament\Resources\DtksResource\Pages;

use App\Filament\Resources\DtksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDtks extends EditRecord
{
    protected static string $resource = DtksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
