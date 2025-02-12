<?php

namespace App\Filament\Resources\LetterLostResource\Pages;

use App\Filament\Resources\LetterLostResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterLost extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Kehilangan Baru';
    protected static string $resource = LetterLostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['no_letter'] = app(LetterCounterService::class)->getNextLetterNumber();

        return $data;
    }
}
