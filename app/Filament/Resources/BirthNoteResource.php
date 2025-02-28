<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BirthNoteResource\Pages;
use App\Filament\Resources\BirthNoteResource\RelationManagers;
use App\Models\BirthNote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Carbon;

class BirthNoteResource extends Resource
{
    protected static ?string $model = BirthNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen Khusus';

    protected static ?string $navigationLabel = 'Capil Kelahiran';
    protected static ?string $title = 'Capil Kelahiran';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Pelapor')
                    ->schema([
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('name')
                                ->label("Nama")
                                ->required()
                                ->maxLength(44),
                            Forms\Components\TextInput::make('nik')
                                ->label("NIK")
                                ->required()
                                ->maxLength(20),
                        ]),
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('no_dok_journey')
                                ->label("No. Dok. Perjalanan")
                                ->numeric()
                                ->minValue(1)
                                ->helperText("Ketika membuat dokumen baru anda bisa mengosongi form ini")
                                ->rules([
                                    function ($get, $record) {
                                        return function ($attribute, $value, $fail) use ($get, $record) {
                                            $year = $record->year ?? now()->year;

                                            $exists = BirthNote::where('no_dok_journey', $value)
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
                                ->label("Kewarganegaraan")
                                ->required()
                                ->options([1 => 'WNI', 2 => 'WNA'])
                                ->default(1),
                        ]),
                        Forms\Components\TextInput::make('no_wa')
                            ->label("Nomor HP/WA")
                            ->required()
                            ->maxLength(20),
                    ]),
                Forms\Components\Section::make('Data Saksi')
                    ->schema([
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('name_saksi')
                                ->label("Nama Saksi 1")
                                ->required()
                                ->maxLength(44),
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
                                ->maxLength(44),
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
                                ->maxLength(44),
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
                                ->maxLength(44),
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
                Forms\Components\Section::make('Data Anak')
                    ->schema([
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('no_kk_anak')
                                ->label("No. Kartu Keluarga")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\Select::make('hub_keluarga')
                                ->label("Hubungan Keluarga")
                                ->required()
                                ->options([1 => 'anak', 2 => 'cucu', 3 => 'Famili Lain', 4 => 'Lainnya']),
                            Forms\Components\TextInput::make('name_child')
                                ->label("Nama")
                                ->required()
                                ->maxLength(44),
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\Select::make('gender_child')
                                ->label("Jenis Kelamin")
                                ->required()
                                ->options([1 => "Laki-Laki", 2 => "Perempuan"]),
                            Forms\Components\Select::make('place_birth_child')
                                ->label("Tempat Dilahirkan")
                                ->required()
                                ->options([1 => "RS/RB", 2 => "Puskesmas", 3 => "Polindes", 4 => "Rumah", 5 => "Lainnya"]),
                            Forms\Components\TextInput::make('place_birth_child2')
                                ->label("Tempat Kelahiran")
                                ->required()
                                ->maxLength(20),
                        ]),
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\DatePicker::make('date_birth_child')
                                ->label("Tanggal Lahir Anak")
                                ->required(),
                            Forms\Components\TimePicker::make('hour_birth_child')
                                ->label("Pukul")
                                ->required()
                                ->seconds(false)
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\Select::make('type_birth_child')
                                ->label("Jenis Kelahiran")
                                ->required()
                                ->options([1 => 'Tunggal', 2 => 'Kembar 2', 3 => 'Kembar 3 ', 4 => "Kembar 4", 5 => "Lainnya"]),
                            Forms\Components\Select::make('no_birth_child')
                                ->label("Kelahiran Ke")
                                ->required()
                                ->options([1 => '1', 2 => '2', 3 => '3', 4 => "4"]),
                            Forms\Components\Select::make('helper_birth')
                                ->label("Penolong Kelahiran")
                                ->required()
                                ->options([1 => 'Dokter', 2 => 'Bidan/Perawat', 3 => 'Dukun', 4 => 'Lainnya']),
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\TextInput::make('weight_child')
                                ->label("Berat Bayi")
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('height_child')
                                ->label("Panjang Bayi")
                                ->required()
                                ->maxLength(20),
                            Forms\Components\Select::make('blood_type_child')
                                ->label("Golongan Darah")
                                ->required()
                                ->options(['A' => 'A', 'B' => "B", "AB" => "AB", "O" => "O"]),
                        ]),
                        Forms\Components\Grid::make(3)->schema([
                            Forms\Components\Select::make('religion_child')
                                ->label("Agama")
                                ->required()
                                ->options([1 => 'Islam', 2 => 'Kristen', 3 => 'Katholik', 4 => 'Hindu', 5 => "Buddha", 6 => "Khonghucu", 7 => "Kepercayaan Terhadap Tuhan YME"])
                                ->default(1),
                            Forms\Components\Select::make('disability')
                                ->required()
                                ->label("Kecacatan")
                                ->options([1 => 'Fisik', 2 => 'Netra', 3 => 'Rungu / Wicara', 4 => 'Fisik Dan Mental', 5 => "Lainnya"])
                                ->default(1),
                            Forms\Components\Select::make('nationality_child')
                                ->required()
                                ->label("Kewarganegaraan")
                                ->options([1 => 'WNI', 2 => 'WNA'])
                                ->default(1),
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
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label("Nama Pelapor")
                    ->searchable(),
                Tables\Columns\TextColumn::make('name_dad')
                    ->label("Nama Ayah")
                    ->searchable(),
                Tables\Columns\TextColumn::make('name_child')
                    ->label("Nama Anak")
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
                        BirthNote::select('year')
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
                    ->url(fn(BirthNote $record): string => route('capil.lahir', [$record->id]))
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
            'index' => Pages\ListBirthNotes::route('/'),
            'create' => Pages\CreateBirthNote::route('/create'),
            'edit' => Pages\EditBirthNote::route('/{record}/edit'),
        ];
    }
}
