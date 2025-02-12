<?php

namespace App\Filament\Resources\CreationResource\Pages;

use App\Filament\Resources\CreationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCreation extends EditRecord
{
    protected static string $resource = CreationResource::class;
    protected static ?string $title = "Edit Kreasi";

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
