<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LetterBusinessResource\Pages;
use App\Filament\Resources\LetterBusinessResource\RelationManagers;
use App\Models\LetterBusiness;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LetterBusinessResource extends Resource
{
    protected static ?string $model = LetterBusiness::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dokumen';

    protected static ?string $navigationLabel = 'Surat Keterangan Usaha';

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

                                $exists = LetterBusiness::where('no_letter', $value)
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
                    ->name("Nama")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->name("Alamat")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_ktp')
                    ->label("NIK")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('agriculture')
                    ->label("Pertanian")
                    ->maxLength(255),
                Forms\Components\TextInput::make('industry')
                    ->label("Industri")
                    ->maxLength(255),
                Forms\Components\TextInput::make('trading')
                    ->label("Perdagangan")
                    ->maxLength(255),
                Forms\Components\TextInput::make('stock_breeding')
                    ->label("Peternakan")
                    ->maxLength(255),
                Forms\Components\TextInput::make('handicraft')
                    ->label("Kerajinan")
                    ->maxLength(255),
                Forms\Components\TextInput::make('service')
                    ->label("Jasa")
                    ->maxLength(255),
                Forms\Components\TextInput::make('other')
                    ->label("Lainnya")
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->label('Filter Berdasarkan Tahun')
                    ->options(
                        LetterBusiness::select('year')
                            ->distinct()
                            ->pluck('year', 'year')
                            ->sort()
                            ->toArray()
                    )
                    ->default(now()->year)
            ])
            ->columns([
                Tables\Columns\TextColumn::make('no_letter')
                    ->label("Nomor Surat")
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label("Nama")
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_ktp')
                    ->label("NIK")
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label("Tahun")
            ])
            ->defaultSort('no_letter', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Download PDF')
                    ->label("Download PDF")
                    ->color(Color::hex('#2196F3'))
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(LetterBusiness $letterBusiness): string => route('surat.usaha', [$letterBusiness->id]))
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
            'index' => Pages\ListLetterBusinesses::route('/'),
            'create' => Pages\CreateLetterBusiness::route('/create'),
            'edit' => Pages\EditLetterBusiness::route('/{record}/edit'),
        ];
    }
}
