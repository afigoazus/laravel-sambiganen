<?php

namespace App\Filament\Resources\LetterDeathResource\Pages;

use App\Filament\Resources\LetterDeathResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterDeath extends EditRecord
{
    protected static string $resource = LetterDeathResource::class;
    protected static ?string $title = 'Edit Surat Keterangan Kematian';

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
