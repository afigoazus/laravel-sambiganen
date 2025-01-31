<?php

namespace App\Filament\Resources\LetterIncapacityResource\Pages;

use App\Filament\Resources\LetterIncapacityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLetterIncapacities extends ListRecords
{
    protected static string $resource = LetterIncapacityResource::class;
    protected static ?string $title = 'Surat Keterangan Tidak Mampu';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Surat Baru"),
        ];
    }
}
