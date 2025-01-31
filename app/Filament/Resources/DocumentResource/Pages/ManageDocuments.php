<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\DocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDocuments extends ManageRecords
{
    protected static string $resource = DocumentResource::class;
    protected static ?string $title = 'Template PDF';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Template Baru"),
        ];
    }
}
