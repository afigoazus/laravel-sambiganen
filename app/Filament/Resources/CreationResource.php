<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CreationResource\Pages;
use App\Filament\Resources\CreationResource\RelationManagers;
use App\Models\Creation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CreationResource extends Resource
{
    protected static ?string $model = Creation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Konten & Media';
    protected static ?string $navigationLabel = 'Kreasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label("Judul Kreasi")
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->label("Konten Kreasi")
                    ->required(),
                Forms\Components\FileUpload::make('photo_path')
                    ->label("Foto Kreasi")
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label("Judul Kreasi")
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->label("Konten Kreasi")
                    ->limit(50),
                Tables\Columns\ImageColumn::make('photo_path')
                    ->label("Foto Kreasi")
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label("Foto Kreasi")
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
            'index' => Pages\ListCreations::route('/'),
            'create' => Pages\CreateCreation::route('/create'),
            'edit' => Pages\EditCreation::route('/{record}/edit'),
        ];
    }
}
