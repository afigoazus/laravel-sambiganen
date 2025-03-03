<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratUmumResource\Pages;
use App\Filament\Resources\SuratUmumResource\RelationManagers;
use App\Models\LetterBusiness;
use App\Models\LetterDeath;
use App\Models\LetterFuel;
use App\Models\LetterIncapacity;
use App\Models\LetterLost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class SuratUmumResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Dokumen Umum';
    protected static ?string $navigationLabel = 'List Surat Umum';
    protected static ?string $title = 'List Surat Umum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(function () use ($table) {
                // Retrieve the filter state for 'year'
                $yearFilter = $table->getFilter('year')?->getState();

                // Build the queries for each table
                $letterDeathQuery = LetterDeath::query()
                    ->select([
                        'id',
                        'name',
                        'no_letter',
                        'year',
                        'no_wa',
                        DB::raw("'Surat Kematian' as type"),
                        'id as original_id',
                    ])
                    ->when($yearFilter, function ($query, $year) {
                        $query->where('year', $year);
                    });

                $letterIncapacityQuery = LetterIncapacity::query()
                    ->select([
                        'id',
                        'name',
                        'no_letter',
                        'year',
                        'no_wa',
                        DB::raw("'Surat Keterangan Tidak Mampu' as type"),
                        'id as original_id'
                    ])
                    ->when($yearFilter, function ($query, $year) {
                        $query->where('year', $year);
                    });

                $letterLostQuery = LetterLost::query()
                    ->select([
                        'id',
                        'name',
                        'no_letter',
                        'year',
                        'no_wa',
                        DB::raw("'Surat Kehilangan' as type"),
                        'id as original_id'
                    ])
                    ->when($yearFilter, function ($query, $year) {
                        $query->where('year', $year);
                    });

                $LetterFuelQuery = LetterFuel::query()
                    ->select([
                        'id',
                        'name',
                        'no_letter',
                        'year',
                        'no_wa',
                        DB::raw("'Surat Solar' as type"),
                        'id as original_id'
                    ])
                    ->when($yearFilter, function ($query, $year) {
                        $query->where('year', $year);
                    });

                $LetterBusinessQuery = LetterBusiness::query()
                    ->select([
                        'id',
                        'name',
                        'no_letter',
                        'year',
                        'no_wa',
                        DB::raw("'Surat Usaha' as type"),
                        'id as original_id'
                    ])
                    ->when($yearFilter, function ($query, $year) {
                        $query->where('year', $year);
                    });

                // Combine the queries using union
                return $letterDeathQuery
                    ->union($letterIncapacityQuery)
                    ->union($letterLostQuery)
                    ->union($LetterFuelQuery)
                    ->union($LetterBusinessQuery);
            })
            ->columns([
                Tables\Columns\TextColumn::make('no_letter')
                    ->label("Nomor Surat")
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label("Nama Pengaju Surat")
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_wa')
                    ->label("No. Whatsapp"),
                Tables\Columns\TextColumn::make('year')
                    ->label("Tahun Surat"),
                Tables\Columns\TextColumn::make('type')
                    ->label("Kategori Surat"),
            ])
            ->actions([
                Action::make('Download PDF')
                    ->label("Download PDF")
                    ->color(Color::hex('#2196F3'))
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(function ($record): string {
                        if ($record->type === 'Surat Kematian') {
                            $letter = LetterDeath::find($record->original_id);
                            return route('surat.kematian', [$letter->id]);
                        } else if ($record->type === 'Surat Keterangan Tidak Mampu') {
                            $letter = LetterIncapacity::find($record->original_id);
                            return route('surat.tidakmampu', [$letter->id]);
                        } else if ($record->type === 'Surat Kehilangan') {
                            $letter = LetterLost::find($record->original_id);
                            return route('surat.kehilangan', [$letter->id]);
                        } else if ($record->type === 'Surat Solar') {
                            $letter = LetterFuel::find($record->original_id);
                            return route('surat.bbm', [$letter->id]);
                        } else {
                            $letter = LetterBusiness::find($record->original_id);
                            return route('surat.usaha', [$letter->id]);
                        }
                    })
            ])
            ->defaultSort('no_letter', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->label('Filter Berdasarkan Tahun')
                    ->options(function () {
                        // Get unique years from all tables
                        return LetterDeath::select('year')
                            ->union(LetterIncapacity::select('year'))
                            ->union(LetterLost::select('year'))
                            ->union(LetterFuel::select('year'))
                            ->union(LetterBusiness::select('year'))
                            ->distinct()
                            ->pluck('year')
                            ->sort()
                            ->mapWithKeys(fn($year) => [$year => $year])
                            ->toArray();
                    })
                    ->default(now()->year),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuratUmums::route('/'),
        ];
    }
}
