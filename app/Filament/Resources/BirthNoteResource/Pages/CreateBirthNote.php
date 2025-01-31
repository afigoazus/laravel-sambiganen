<?php

namespace App\Filament\Resources\BirthNoteResource\Pages;

use App\Filament\Resources\BirthNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBirthNote extends CreateRecord
{
    protected static ?string $title = 'Capil Kelahiran Baru';
    protected static string $resource = BirthNoteResource::class;
}
