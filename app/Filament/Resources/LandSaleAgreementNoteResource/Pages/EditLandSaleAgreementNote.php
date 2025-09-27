<?php

namespace App\Filament\Resources\LandSaleAgreementNoteResource\Pages;

use App\Filament\Resources\LandSaleAgreementNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandSaleAgreementNote extends EditRecord
{
    protected static string $resource = LandSaleAgreementNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
