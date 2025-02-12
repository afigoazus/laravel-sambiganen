<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeathNoteResource\Pages;
use App\Filament\Resources\DeathNoteResource\RelationManagers;
use App\Models\DeathNote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeathNoteResource extends Resource
{
    protected static ?string $model = DeathNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen Khusus';
    protected static ?string $navigationLabel = 'Capil Kematian';
    protected static ?string $title = 'Capil Kematian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Pelapor')
                    ->schema([
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('name')
                                ->label("Nama Pelapor")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\TextInput::make('nik')
                                ->label("NIK Pelapor")
                                ->required()
                                ->maxLength(20),
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('no_dok_journey')
                                ->label("No. Dok. Perjalanan")
                                ->numeric()
                                ->minValue(1)
                                ->helperText("Ketika membuat dokumen baru anda bisa mengosongi form ini")
                                ->rules([
                                    function ($get, $record) {
                                        return function ($attribute, $value, $fail) use ($get, $record) {
                                            $year = $record->year ?? now()->year;

                                            $exists = DeathNote::where('no_dok_journey', $value)
                                                ->where('year', $year)
                                                ->when($record, fn($query) => $query->where('id', '!=', $record->id))
                                                ->exists();

                                            if ($exists) {
                                                $fail("Nomor Dokumen Perjalanan $value sudah ada pada tahun $year");
                                            }
                                        };
                                    }
                                ]),
                            Forms\Components\Select::make('nationality')
                                ->label("Kewarganegaraan Pelapor")
                                ->required()
                                ->options([1 => 'WNI', 2 => 'WNA'])
                                ->default(1),
                            Forms\Components\TextInput::make('no_wa')
                                ->label("Nomor HP/WA")
                                ->required()
                                ->maxLength(20),
                        ]),

                    ]),
                Forms\Components\Section::make('Data Saksi')
                    ->schema([
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('name_saksi')
                                ->label("Nama Saksi 1")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\TextInput::make('nik_saksi')
                                ->label("NIK Saksi 1")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\Select::make('nationality_saksi')
                                ->label("Kewarganegaraan Saksi 1")
                                ->required()
                                ->options([1 => 'WNI', 2 => 'WNA'])
                                ->default(1),
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('name_saksi2')
                                ->label("Nama Saksi 2")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\TextInput::make('nik_saksi2')
                                ->label("NIK Saksi 2")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\Select::make('nationality_saksi2')
                                ->label("Kewarganegaraan Saksi 2")
                                ->required()
                                ->options([1 => 'WNI', 2 => 'WNA'])
                                ->default(1),
                        ]),
                    ]),
                Forms\Components\Section::make('Data Orang Tua')
                    ->schema([
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('name_dad')
                                ->label("Nama Ayah")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\TextInput::make('nik_dad')
                                ->label("NIK Ayah")
                                ->required()
                                ->maxLength(20),
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('place_born_dad')
                                ->label("Tempat Lahir Ayah")
                                ->required()
                                ->maxLength(255),
                            Forms\Components\DatePicker::make('date_born_dad')
                                ->label("Tanggal Lahir Ayah")
                                ->required(),
                            Forms\Components\Select::make('nationality_dad')
                                ->label("Kewarganegaraan Ayah")
                                ->required()
                                ->options([1 => 'WNI', 2 => 'WNA'])
                                ->default(1),
                        ]),
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('name_mom')
                                ->label("Nama Ibu")
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('nik_mom')
                                ->label("NIK Ibu")
                                ->required()
                                ->maxLength(20),
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('place_born_mom')
                                ->label("Tempat Lahir Ibu")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\DatePicker::make('date_born_mom')
                                ->label("Tanggal Lahir Ibu")
                                ->required(),
                            Forms\Components\Select::make('nationality_mom')
                                ->label("Kewarganegaraan Ibu")
                                ->required()
                                ->options([1 => 'WNI', 2 => 'WNA'])
                                ->default(1),
                        ]),
                    ]),

                Forms\Components\Section::make('Data Kematian')
                    ->schema([
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('nik_death')
                                ->label("NIK")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\TextInput::make('name_death')
                                ->label("Nama")
                                ->required()
                                ->maxLength(20),

                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\DatePicker::make('date_death')
                                ->label("Tanggal Kematian")
                                ->required(),
                            Forms\Components\TimePicker::make('hour_death')
                                ->label("Pukul")
                                ->required()
                                ->seconds(false),
                            Forms\Components\Select::make('caused_death')
                                ->label("Sebab Kematian")
                                ->required()
                                ->options([1 => 'Sakit biasa/tua', 2 => 'Wabah penyakit', 3 => 'Kecelakaan', 4 => 'Kriminalitas', 5 => 'Bunuh Diri', 6 => 'Lainnya']),
                        ]),
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('place_death')
                                ->label("Tempat Kematian")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\Select::make('info_death')
                                ->label("Yang Menerangkan")
                                ->required()
                                ->options([1 => 'Dokter', 2 => 'Tenaga Kesehatan', 3 => 'Kepolisian', 4 => 'Lainnya']),
                        ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_dok_journey')
                    ->label("No. Dokumen")
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label("Nama Pelapor")
                    ->searchable(),
                Tables\Columns\TextColumn::make('name_death')
                    ->label("Nama Kematian")
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun Surat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Surat Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Surat Diedit')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('no_dok_journey', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->label('Filter Berdasarkan Tahun')
                    ->options(
                        DeathNote::select('year')
                            ->distinct()
                            ->pluck('year', 'year')
                            ->sort()
                            ->toArray()
                    )
                    ->default(now()->year)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Download PDF')
                    ->label("Download PDF")
                    ->color(Color::hex('#2196F3'))
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(DeathNote $record): string => route('capil.kematian', [$record->id]))
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
            'index' => Pages\ListDeathNotes::route('/'),
            'create' => Pages\CreateDeathNote::route('/create'),
            'edit' => Pages\EditDeathNote::route('/{record}/edit'),
        ];
    }
}
