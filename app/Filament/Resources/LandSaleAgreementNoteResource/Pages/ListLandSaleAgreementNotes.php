<?php

namespace App\Filament\Resources\LandSaleAgreementNoteResource\Pages;

use App\Filament\Resources\LandSaleAgreementNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandSaleAgreementNotes extends ListRecords
{
    protected static string $resource = LandSaleAgreementNoteResource::class;
    protected static ?string $title = "Surat Perjanjian Jual Beli Tanah";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
