<?php

namespace App\Filament\Resources\CreationResource\Pages;

use App\Filament\Resources\CreationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCreation extends CreateRecord
{
    protected static string $resource = CreationResource::class;
    protected static ?string $title = "Buat Kreasi Baru";
}
