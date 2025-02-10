<?php

namespace App\Filament\Resources\LetterIncapacityResource\Pages;

use App\Filament\Resources\LetterIncapacityResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterIncapacity extends EditRecord
{
    protected static string $resource = LetterIncapacityResource::class;
    protected static ?string $title = 'Edit Surat Keterangan Tidak Mampu';

    protected function afterSave(): void
    {
        app(LetterCounterService::class)->resetRecentLetterNumber();
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(function () {
                    app(LetterCounterService::class)->resetRecentLetterNumber();
                }),
        ];
    }
}
