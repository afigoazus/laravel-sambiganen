<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandSaleAgreementNoteResource\Pages;
use App\Filament\Resources\LandSaleAgreementNoteResource\RelationManagers;
use App\Models\LandSaleAgreementNote;
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

class LandSaleAgreementNoteResource extends Resource
{
    protected static ?string $model = LandSaleAgreementNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen Khusus';

    protected static ?string $navigationLabel = 'Surat Perjanjian Jual Beli Tanah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Pembeli')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('buyer_name')
                                    ->label('Nama Pembeli')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('buyer_place_born')
                                    ->label('Tempat Lahir')
                                    ->required()
                                    ->maxLength(255),
                                DatePicker::make('buyer_date_born')
                                    ->label('Tanggal Lahir')
                                    ->required(),
                                TextInput::make('buyer_address')
                                    ->label('Alamat')
                                    ->required(),
                            ])
                    ]),

                Section::make('Data Penjual')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('seller_name')
                                    ->label('Nama Penjual')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('seller_place_born')
                                    ->label('Tempat Lahir')
                                    ->required()
                                    ->maxLength(255),
                                DatePicker::make('seller_date_born')
                                    ->label('Tanggal Lahir')
                                    ->required(),
                                TextInput::make('seller_address')
                                    ->label('Alamat')
                                    ->required(),
                            ])
                    ]),
                Section::make('Data Tanah')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('land_area')
                                    ->label('Luas Tanah (m2)')
                                    ->required()
                                    ->numeric(),
                                TextInput::make('no_persil')
                                    ->label('No. Persil')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('no_sppt')
                                    ->label('No. SPPT')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('no_certificate')
                                    ->label('No. Sertifikat')
                                    ->required()
                                    ->maxLength(255),
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
                                    ->label('Harga Tanah (Rp)')
                                    ->required()
                                    ->numeric(),
                            ])
                    ]),
                Section::make('Data Saksi')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('witness1_name')
                                    ->label('Nama Saksi 1')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('witness1_job_position')
                                    ->label('Jabatan Saksi 1')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('witness2_name')
                                    ->label('Nama Saksi 2')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('witness2_job_position')
                                    ->label('Jabatan Saksi 2')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('witness3_name')
                                    ->label('Nama Saksi 3')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('witness3_job_position')
                                    ->label('Jabatan Saksi 3')
                                    ->required()
                                    ->maxLength(255),
                            ])
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_letter')
                    ->Label('No. Dokumen')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('buyer_name')
                    ->Label('Nama Pembeli')
                    ->searchable(),
                TextColumn::make('seller_name')
                    ->Label('Nama Penjual')
                    ->searchable(),
                TextColumn::make('no_persil')
                    ->Label('No. Persil')
                    ->searchable(),
                TextColumn::make('no_sppt')
                    ->Label('No. SPPT')
                    ->searchable(),
                TextColumn::make('year')
                    ->Label('Tahun Surat')
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
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->defaultSort('no_letter', 'desc')
            ->filters([
                SelectFilter::make('year')
                    ->label('Filter Berdasarkan Tahun Surat')
                    ->options(
                        LandSaleAgreementNote::query()
                            ->distinct()
                            ->pluck('year', 'year')
                            ->sort()
                            ->toArray()
                    )
                    ->default(Date::now()->year)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Donwload PDF')
                    ->label('Download PDF')
                    ->icon('heroicon-o-document-arrow-down')
                    ->color(Color::hex('#2196F3'))
                    // ->url(fn (LandSaleAgreementNote $record): string => route('document.land-sale-agreement-note', $record))
                    ->url(route('test.download.pdf'))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListLandSaleAgreementNotes::route('/'),
            'create' => Pages\CreateLandSaleAgreementNote::route('/create'),
            'edit' => Pages\EditLandSaleAgreementNote::route('/{record}/edit'),
        ];
    }
}
