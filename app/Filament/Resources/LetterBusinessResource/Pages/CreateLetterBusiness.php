<?php

namespace App\Filament\Resources\LetterBusinessResource\Pages;

use App\Filament\Resources\LetterBusinessResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLetterBusiness extends CreateRecord
{
    protected static ?string $title = 'Surat Keterangan Usaha Baru';
    protected static string $resource = LetterBusinessResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['no_letter'] = app(LetterCounterService::class)->getNextLetterNumber();

        return $data;
    }
}
