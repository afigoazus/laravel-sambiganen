<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemographicResource\Pages;
use App\Filament\Resources\DemographicResource\RelationManagers;
use App\Models\Demographic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemographicResource extends Resource
{
    protected static ?string $model = Demographic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Demografi Penduduk';
    protected static ?string $navigationGroup = 'Anggaran & Kependudukan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('dusun')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('rukun_warga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('rukun_tetangga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jiwa')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dusun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rukun_warga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rukun_tetangga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jiwa')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListDemographics::route('/'),
            'create' => Pages\CreateDemographic::route('/create'),
            'edit' => Pages\EditDemographic::route('/{record}/edit'),
        ];
    }
}
