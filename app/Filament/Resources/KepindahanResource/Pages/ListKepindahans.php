<?php

namespace App\Filament\Resources\KepindahanResource\Pages;

use App\Filament\Resources\KepindahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKepindahans extends ListRecords
{
    protected static string $resource = KepindahanResource::class;
    protected static ?string $title = "SKPWNI";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("SKPWNI Baru"),
        ];
    }
}
