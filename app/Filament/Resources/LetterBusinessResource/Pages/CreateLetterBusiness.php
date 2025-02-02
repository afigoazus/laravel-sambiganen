<?php

namespace App\Filament\Resources\LetterBusinessResource\Pages;

use App\Filament\Resources\LetterBusinessResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterBusiness extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Usaha Baru';
    protected static string $resource = LetterBusinessResource::class;
}
