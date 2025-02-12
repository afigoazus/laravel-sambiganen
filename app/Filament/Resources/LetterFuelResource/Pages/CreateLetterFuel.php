<?php

namespace App\Filament\Resources\LetterFuelResource\Pages;

use App\Filament\Resources\LetterFuelResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterFuel extends CreateRecord
{
    protected static ?string $title = 'Surat Rekomendasi BBM Baru';
    protected static string $resource = LetterFuelResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['no_letter'] = app(LetterCounterService::class)->getNextLetterNumber();

        return $data;
    }
}
