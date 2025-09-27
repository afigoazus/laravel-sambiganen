<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandPriceNoteResource\Pages;
use App\Filament\Resources\LandPriceNoteResource\RelationManagers;
use App\Models\LandPriceNote;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;
use Filament\Tables\Actions\Action;
use Filament\Support\Colors\Color;

class LandPriceNoteResource extends Resource
{
    protected static ?string $model = LandPriceNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen Khusus';

    protected static ?string $navigationLabel = 'Surat Keterangan Taksiran Harga Tanah';

    protected static ?string $title = 'Surat Keterangan Taksiran Harga Tanah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Pemilik Tanah')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama Pemilik Tanah')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('place_born')
                                    ->label('Tempat Lahir')
                                    ->required()
                                    ->maxLength(255),
                                DatePicker::make('date_born')
                                    ->label('Tanggal Lahir')
                                    ->required(),
                                TextInput::make('job')
                                    ->label('Pekerjaan')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('address')
                                    ->label('Alamat')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                            ])
                    ]),
                Section::make('Data Tanah') 
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('certificate_number')
                                    ->label('Nomor Sertifikat')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('land_area')
                                    ->label('Luas Tanah (m2)')
                                    ->required()
                                    ->numeric(),
                                TextInput::make('north_boundary')
                                    ->label('Batas Utara')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('south_boundary')
                                    ->label('Batas Selatan')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('east_boundary')
                                    ->label('Batas Timur')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('west_boundary')
                                    ->label('Batas Barat')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('land_price')
                                    ->label('Harga Tanah Per Meter Persegi (Rp)')
                                    ->required()
                                    ->maxLength(255),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_letter')
                    ->label('No. Dokumen')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Nama Pemilik Tanah')
                    ->searchable(),
                TextColumn::make('year')
                    ->label('Tahun Surat')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Surat Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Surat Diedit')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('no_letter', 'desc')
            ->filters([
                SelectFilter::make('year')
                    ->label('Filter Berdasarkan Tahun Surat')
                    ->options(
                        LandPriceNote::query()
                            ->distinct()
                            ->pluck('year', 'year')
                            ->sort()
                            ->toArray()
                    )
                    ->default(Date::now()->year),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Download PDF')
                    ->label('Download PDF')
                    ->color(Color::hex('#2196F3'))
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(LandPriceNote $record): string => route('surat.taksiran-harga-tanah', [$record->id]))
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListLandPriceNotes::route('/'),
            'create' => Pages\CreateLandPriceNote::route('/create'),
            'edit' => Pages\EditLandPriceNote::route('/{record}/edit'),
        ];
    }
}
