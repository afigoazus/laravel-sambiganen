<?php

namespace App\Filament\Resources\LetterIncapacityResource\Pages;

use App\Filament\Resources\LetterIncapacityResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterIncapacity extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Tidak Mampu Baru';
    protected static string $resource = LetterIncapacityResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['no_letter'] = app(LetterCounterService::class)->getNextLetterNumber();

        return $data;
    }
}
