<?php

namespace App\Filament\Resources\LetterBusinessResource\Pages;

use App\Filament\Resources\LetterBusinessResource;
use App\Http\Services\LetterCounterService;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetterBusiness extends EditRecord
{
    protected static string $resource = LetterBusinessResource::class;
    protected static ?string $title = 'Edit Surat Keterangan Usaha';

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
