<?php

namespace App\Filament\Resources\LandPriceNoteResource\Pages;

use App\Filament\Resources\LandPriceNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLandPriceNote extends CreateRecord
{
    protected static string $resource = LandPriceNoteResource::class;
    protected static ?string $title = 'Surat Keterangan Taksiran Harga Tanah';
}
