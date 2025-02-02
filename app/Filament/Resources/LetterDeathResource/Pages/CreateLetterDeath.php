<?php

namespace App\Filament\Resources\LetterDeathResource\Pages;

use App\Filament\Resources\LetterDeathResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterDeath extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Kematian Baru';
    protected static string $resource = LetterDeathResource::class;
}
