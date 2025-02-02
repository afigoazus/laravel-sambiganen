<?php

namespace App\Filament\Resources\LetterIncapacityResource\Pages;

use App\Filament\Resources\LetterIncapacityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterIncapacity extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Tidak Mampu Baru';
    protected static string $resource = LetterIncapacityResource::class;
}
