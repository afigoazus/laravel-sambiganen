<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LetterIncapacityResource\Pages;
use App\Filament\Resources\LetterIncapacityResource\RelationManagers;
use App\Http\Services\LetterCounterService;
use App\Models\LetterIncapacity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LetterIncapacityResource extends Resource
{
    protected static ?string $model = LetterIncapacity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen Umum';
    protected static ?string $navigationLabel = 'Surat Keterangan Tidak Mampu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Pribadi')->schema([
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('no_letter')
                            ->label("Nomor Surat")
                            ->numeric()
                            ->helperText("Ketika Membuat Surat Baru, Nomor Surat Akan Diisi Otomatis"),
                        Forms\Components\TextInput::make('name')
                            ->label("Nama")
                            ->required()
                            ->maxLength(255),
                    ]),
                    Forms\Components\Grid::make(3)->schema([
                        Forms\Components\TextInput::make('tempat_lahir')
                            ->label("Tempat Lahir")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('tgl_lahir')
                            ->label("Tanggal Lahir")
                            ->required(),
                        Forms\Components\Select::make('gender')
                            ->label("Jenis Kelamin")
                            ->options([
                                "Laki-laki" => "Laki-laki",
                                "Perempuan" => "Perempuan",
                            ])
                            ->required(),
                    ]),
                    Forms\Components\Grid::make(3)->schema([
                        Forms\Components\TextInput::make('education')
                            ->label("Pendidikan")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('job')
                            ->label("Pekerjaan")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('marriage')
                            ->label("Status Perkawinan")
                            ->required()
                            ->options([
                                "Belum Kawin" => "Belum Kawin",
                                "Sudah Kawin" => "Sudah Kawin",
                                "Janda" => "Janda",
                                "Duda" => "Duda"
                            ]),
                    ]),
                    Forms\Components\Grid::make(3)->schema([
                        Forms\Components\TextInput::make('nik')
                            ->label("Nomor KTP / NIK")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('religion')
                            ->label("Agama")
                            ->options([
                                "Islam" => 'Islam',
                                "Kristen" => 'Kristen',
                                "Hindu" => 'Hindu',
                                "Buddha" => 'Buddha',
                                "Katolik" => 'Katolik',
                                "Konghucu" => 'Konghucu',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('address')
                            ->label("Alamat")
                            ->required()
                            ->maxLength(255),
                    ])
                ]),
                Forms\Components\Section::make('Data Anak')->schema([
                    Forms\Components\Grid::make(3)->schema([
                        Forms\Components\TextInput::make('name_child')
                            ->label("Nama Anak")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tempat_lahir_child')
                            ->label("Tempat Lahir Anak")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('tgl_lahir_child')
                            ->label("Tanggal Lahir Anak")
                            ->required(),
                    ]),
                    Forms\Components\Grid::make(3)->schema([
                        Forms\Components\Select::make('gender_child')
                            ->label("Jenis Kelamin Anak")
                            ->required()
                            ->options([
                                "Laki-laki" => "Laki-laki",
                                "Perempuan" => "Perempuan",
                            ]),
                        Forms\Components\TextInput::make('education_child')
                            ->label("Pendidikan Anak")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('address_child')
                            ->label("Alamat Anak")
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
                Tables\Columns\TextColumn::make('no_letter')
                    ->label("Nomor Surat")
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label("Nama")
                    ->searchable(),
                Tables\Columns\TextColumn::make('name_child')
                    ->label("Nama Anak")
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label("Tahun Surat")
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('no_letter', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->label('Filter Berdasarkan Tahun')
                    ->options(
                        LetterIncapacity::select('year')
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
                    ->url(fn(LetterIncapacity $letterIncapacity): string => route('surat.tidakmampu', [$letterIncapacity->id]))
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(function () {
                            app(LetterCounterService::class)->resetRecentLetterNumber();
                        }),
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
            'index' => Pages\ListLetterIncapacities::route('/'),
            'create' => Pages\CreateLetterIncapacity::route('/create'),
            'edit' => Pages\EditLetterIncapacity::route('/{record}/edit'),
        ];
    }
}
