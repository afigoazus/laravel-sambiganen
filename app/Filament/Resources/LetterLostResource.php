<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LetterLostResource\Pages;
use App\Filament\Resources\LetterLostResource\RelationManagers;
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

    protected static ?string $navigationGroup = 'Dokumen';
    protected static ?string $navigationLabel = 'Surat Kehilangan';
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

                                $exists = LetterLost::where('no_letter', $value)
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
                    ->label("Nama")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ttl')
                    ->label("Tempat Tanggal Lahir")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->label("Jenis Kelamin")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nationality')
                    ->label("Kewarganegaraan")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('religion')
                    ->label("Agama")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('marriage')
                    ->label("Status Perkawinan")
                    ->required()
                    ->maxLength(255),
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
                    ->label("Keterangan")
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
                Tables\Columns\TextColumn::make('address')
                    ->label("Alamat")
                    ->searchable(),
                Tables\Columns\TextColumn::make('information')
                    ->label("Keterangan")
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
            'index' => Pages\ListLetterLosts::route('/'),
            'create' => Pages\CreateLetterLost::route('/create'),
            'edit' => Pages\EditLetterLost::route('/{record}/edit'),
        ];
    }
}
