<?php

namespace App\Filament\Resources\LetterDeathResource\Pages;

use App\Filament\Resources\LetterDeathResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterDeath extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Kematian Baru';
    protected static string $resource = LetterDeathResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['no_letter'] = app(LetterCounterService::class)->getNextLetterNumber();

        return $data;
    }
}
