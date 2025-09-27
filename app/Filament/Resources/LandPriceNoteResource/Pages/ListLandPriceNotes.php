<?php

namespace App\Filament\Resources\LandPriceNoteResource\Pages;

use App\Filament\Resources\LandPriceNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandPriceNotes extends ListRecords
{
    protected static string $resource = LandPriceNoteResource::class;
    protected static ?string $title = 'Surat Keterangan Taksiran Harga Tanah';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
