<?php

namespace App\Filament\Resources\LandSaleAgreementNoteResource\Pages;

use App\Filament\Resources\LandSaleAgreementNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLandSaleAgreementNote extends CreateRecord
{
    protected static string $resource = LandSaleAgreementNoteResource::class;
    protected static ?string $title = "Surat Perjanjian Jual Beli Tanah";
}
