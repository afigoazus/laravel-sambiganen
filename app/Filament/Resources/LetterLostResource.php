<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LetterLostResource\Pages;
use App\Filament\Resources\LetterLostResource\RelationManagers;
use App\Http\Services\LetterCounterService;
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

class LetterLostResource extends Resource
{
    protected static ?string $model = LetterLost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen Umum';
    protected static ?string $navigationLabel = 'Surat Kehilangan';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_letter')
                    ->label("Nomor Surat")
                    ->numeric()
                    ->helperText("Ketika Membuat Surat Baru, Nomor Surat Akan Diisi Otomatis"),
                Forms\Components\TextInput::make('name')
                    ->label("Nama")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->label("Tempat Tanggal Lahir")
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
                Forms\Components\Select::make('nationality')
                    ->label("Kewarganegaraan")
                    ->required()
                    ->options([1 => 'WNI', 2 => 'WNA'])
                    ->default(1),
                Forms\Components\Select::make('religion')
                    ->label("Agama")
                    ->required()
                    ->options([1 => 'Islam', 2 => 'Kristen', 3 => 'Katholik', 4 => 'Hindu', 5 => "Buddha", 6 => "Khonghucu", 7 => "Kepercayaan Terhadap Tuhan YME"])
                    ->default(1),
                Forms\Components\Select::make('marriage')
                    ->label("Status Perkawinan")
                    ->required()
                    ->options([
                        "Belum Kawin" => "Belum Kawin",
                        "Sudah Kawin" => "Sudah Kawin",
                        "Janda" => "Janda",
                        "Duda" => "Duda"
                    ]),
                Forms\Components\TextInput::make('job')
                    ->label("Pekerjaan")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('education')
                    ->label("Pendidikan")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')
                    ->label("NIK")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_kk')
                    ->label("Nomor KK")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->label("Alamat")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('information')
                    ->label("Barang Hilang")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_wa')
                    ->label("Nomer Whatsapp")
                    ->maxLength(255),
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
                Tables\Columns\TextColumn::make('address')
                    ->label("Alamat")
                    ->searchable(),
                Tables\Columns\TextColumn::make('information')
                    ->label("Keterangan")
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_wa')
                    ->label("No. Whatsapp")
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
                        LetterLost::select('year')
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
                    ->url(fn(LetterLost $letterLost): string => route('surat.kehilangan', [$letterLost->id]))
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
            'index' => Pages\ListLetterLosts::route('/'),
            'create' => Pages\CreateLetterLost::route('/create'),
            'edit' => Pages\EditLetterLost::route('/{record}/edit'),
        ];
    }
}
