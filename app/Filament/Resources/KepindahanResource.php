<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KepindahanResource\Pages;
use App\Filament\Resources\KepindahanResource\RelationManagers;
use App\Models\Kepindahan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
use Filament\Support\Colors\Color;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KepindahanResource extends Resource
{
    protected static ?string $model = Kepindahan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Dokumen Khusus';
    protected static ?string $navigationLabel = 'SKPWNI';
    protected static ?string $title = 'SKPWNI';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Utama')
                    ->schema([
                        Forms\Components\TextInput::make('no_kk')
                            ->label('Nomor Kartu Keluarga')
                            ->required()
                            ->maxLength(20),
                        Forms\Components\TextInput::make('nama_lengkap')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('nik')
                            ->label('NIK')
                            ->required()
                            ->maxLength(20),
                        Forms\Components\TextInput::make('no_wa')
                            ->label('Nomor WhatsApp')
                            ->tel()
                            ->maxLength(15),
                    ])->columns(2),

                Forms\Components\Section::make('Alamat Asal')
                    ->schema([
                        Forms\Components\Textarea::make('alamat_asal')
                            ->required()
                            ->rows(2),
                        Forms\Components\TextInput::make('rt_asal')
                            ->required()
                            ->numeric()
                            ->minValue(1)
                            ->maxLength(5),
                        Forms\Components\TextInput::make('rw_asal')
                            ->required()
                            ->numeric()
                            ->minValue(1)
                            ->maxLength(5),
                        Forms\Components\TextInput::make('kode_pos_asal')
                            ->required()
                            ->maxLength(10),
                    ])->columns(2),

                Forms\Components\Section::make('Alamat Pindah')
                    ->schema([
                        Forms\Components\Textarea::make('alamat_pindah')
                            ->required()
                            ->rows(2),
                        Forms\Components\TextInput::make('rt_pindah')
                            ->numeric()
                            ->minValue(1)
                            ->required()
                            ->maxLength(5),
                        Forms\Components\TextInput::make('rw_pindah')
                            ->numeric()
                            ->minValue(1)
                            ->required()
                            ->maxLength(5),
                        Forms\Components\TextInput::make('desa')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('kecamatan')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('kabupaten')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('provinsi')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('kode_pos_pindah')
                            ->required()
                            ->maxLength(10),
                        Forms\Components\TextInput::make('no_telp')
                            ->tel()
                            ->maxLength(15),
                    ])->columns(2),

                Forms\Components\Section::make('Informasi Kepindahan')
                    ->schema([
                        Forms\Components\Select::make('klasifikasi_kepindahan')
                            ->label('Klasifikasi Kepindahan')
                            ->options([
                                1 => 'Dalam satu desa/kelurahan atau yang disebut dengan nama lain',
                                2 => 'Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan',
                                3 => 'Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota',
                                4 => 'Antar kabupaten/kota dalam satu provinsi',
                                5 => 'Antar provinsi',
                            ])
                            ->required(),
                        Forms\Components\Select::make('alasan_pindah')
                            ->label('Alasan Pindah')
                            ->options([
                                1 => 'Pekerjaan',
                                2 => 'Pendidikan',
                                3 => 'Keamanan',
                                4 => 'Kesehatan',
                                5 => 'Perumahan',
                                6 => 'Keluarga',
                                7 => 'Lainnya',
                            ])
                            ->required(),
                        Forms\Components\Select::make('jenis_kepindahan')
                            ->label('Jenis Kepindahan')
                            ->options([
                                1 => 'Kepala Keluarga',
                                2 => 'Kepala Keluarga dan seluruh Anggota Keluarga',
                                3 => 'Kepala Keluarga dan Sebagian Anggota Keluarga',
                                4 => 'Anggota Keluarga',
                            ])
                            ->required(),
                        Forms\Components\Select::make('anggota_tidak_pindah')
                            ->label('Anggota Keluarga Tidak Pindah')
                            ->options([
                                1 => 'Numpang KK',
                                2 => 'Membuat KK Baru',
                                3 => 'No KK tetap',
                            ])
                            ->required(),
                        Forms\Components\Select::make('anggota_pindah')
                            ->label('Anggota Keluarga Yang Pindah')
                            ->options([
                                1 => 'Numpang KK',
                                2 => 'Membuat KK Baru',
                            ])
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Daftar Anggota Pindah')
                    ->schema([
                        Forms\Components\Repeater::make('anggotaPindah')
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('nik')
                                    ->required()
                                    ->maxLength(20),
                                Forms\Components\TextInput::make('nama')
                                    ->required()
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('status')
                                    ->required()
                                    ->maxLength(50),
                            ])
                            ->columns(3)
                            ->itemLabel(fn(array $state): ?string => $state['nama'] ?? null)
                            ->addActionLabel('Tambah Anggota')
                            ->reorderable(false)
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_kk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('desa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anggota_pindah')
                    ->label('Jumlah Anggota')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Download PDF')
                    ->label("Download PDF")
                    ->color(Color::hex('#2196F3'))
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(Kepindahan $record): string => route('surat.skpwni', [$record->id]))
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
            'index' => Pages\ListKepindahans::route('/'),
            'create' => Pages\CreateKepindahan::route('/create'),
            'edit' => Pages\EditKepindahan::route('/{record}/edit'),
        ];
    }
}
