<?php

namespace App\Filament\Resources\LetterLostResource\Pages;

use App\Filament\Resources\LetterLostResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterLost extends EditRecord
{
    protected static ?string $title = 'Edit Surat Keterangan Kehilangan';
    protected static string $resource = LetterLostResource::class;

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
