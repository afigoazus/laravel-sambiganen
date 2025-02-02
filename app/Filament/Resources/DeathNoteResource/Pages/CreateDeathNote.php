<?php

namespace App\Filament\Resources\DeathNoteResource\Pages;

use App\Filament\Resources\DeathNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDeathNote extends CreateRecord
{
    protected static ?string $title = 'Capil Kematian Baru';
    protected static string $resource = DeathNoteResource::class;
}
