<?php

namespace App\Filament\Resources\DemographicResource\Pages;

use App\Filament\Resources\DemographicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemographics extends ListRecords
{
    protected static string $resource = DemographicResource::class;
    protected static ?string $title = "Demografi Penduduk";

    protected function getHeaderActions(): array
    {
        return [];
    }
}
