<?php

namespace App\Filament\Resources\LetterLostResource\Pages;

use App\Filament\Resources\LetterLostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterLost extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Kehilangan Baru';
    protected static string $resource = LetterLostResource::class;
}
