<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LetterDeathResource\Pages;
use App\Filament\Resources\LetterDeathResource\RelationManagers;
use App\Models\LetterDeath;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LetterDeathResource extends Resource
{
    protected static ?string $model = LetterDeath::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen';
    protected static ?string $navigationLabel = 'Surat Keterangan Kematian';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_letter')
                    ->label("Nomor Surat")
                    ->numeric()
                    ->minValue(1)
                    ->helperText("Ketika membuat dokumen baru anda bisa mengosongi form ini")
                    ->rules([
                        function ($get, $record) {
                            return function ($attribute, $value, $fail) use ($get, $record) {
                                $year = $record->year ?? now()->year;

                                $exists = LetterDeath::where('no_letter', $value)
                                    ->where('year', $year)
                                    ->when($record, fn($query) => $query->where('id', '!=', $record->id))
                                    ->exists();

                                if ($exists) {
                                    $fail("Nomor Surat $value sudah ada pada tahun $year");
                                }
                            };
                        }
                    ]),
                Forms\Components\TextInput::make('name')
                    ->label("Nama Lengkap")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')
                    ->label("NIK/NIP")
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_death')
                    ->label("Tanggal Kematian")
                    ->required(),
                Forms\Components\TimePicker::make('hour_death')
                    ->label("Jam Kematian")
                    ->required()
                    ->seconds(false),
                Forms\Components\TextInput::make('cause_death')
                    ->label("Sebab Kematian")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mom_name')
                    ->label("Nama Ibu")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('dad_name')
                    ->label("Nama Ayah")
                    ->required()
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
                Tables\Columns\TextColumn::make('nik')
                    ->label("NIK/NIP")
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label("Tahun")
            ])
            ->defaultSort('no_letter', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->label('Filter Berdasarkan Tahun')
                    ->options(
                        LetterDeath::select('year')
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
                    ->url(fn(LetterDeath $letterDeath): string => route('surat.kematian', [$letterDeath->id])),
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
            'index' => Pages\ListLetterDeaths::route('/'),
            'create' => Pages\CreateLetterDeath::route('/create'),
            'edit' => Pages\EditLetterDeath::route('/{record}/edit'),
        ];
    }
}
