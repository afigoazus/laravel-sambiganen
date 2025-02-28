<?php

namespace App\Filament\Resources\DtksResource\Pages;

use App\Filament\Resources\DtksResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDtks extends ListRecords
{
    protected static string $resource = DtksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("DTKS Baru"),
        ];
    }
}
