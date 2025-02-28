<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DtksResource\Pages;
use App\Filament\Resources\DtksResource\RelationManagers;
use App\Models\Dtks;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DtksResource extends Resource
{
    protected static ?string $model = Dtks::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'DTKS';
    protected static ?string $navigationGroup = 'Data Terpadu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label("Nama Lengkap")
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('rt/rw')
                    ->label("RT / RW")
                    ->required()
                    ->maxLength(100),
                Forms\Components\FileUpload::make('foto_ktp')
                    ->label("Foto KTP")
                    ->required(),
                Forms\Components\FileUpload::make('foto_kk')
                    ->label("Foto KK")
                    ->required(),
                Forms\Components\FileUpload::make('foto_rumah')
                    ->label("Foto Rumah")
                    ->required(),
                Forms\Components\FileUpload::make('foto_lantai_rumah')
                    ->label("Foto Lantai Rumah")
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label("Nama Lengkap")
                    ->searchable(),
                Tables\Columns\TextColumn::make('rt/rw')
                    ->label("RT / RW")
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Download PDF')
                    ->label("Download PDF")
                    ->color(Color::hex('#2196F3'))
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(Dtks $dtks): string => route('surat.dtks', [$dtks->id]))
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
            'index' => Pages\ListDtks::route('/'),
            'create' => Pages\CreateDtks::route('/create'),
            'edit' => Pages\EditDtks::route('/{record}/edit'),
        ];
    }
}
