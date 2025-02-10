<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Carbon;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Konten & Media';
    protected static ?string $navigationLabel = 'Berita';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label("Judul Berita")
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('published_at')
                    ->label("Waktu Unggah")
                    ->required(),
                Forms\Components\Select::make('categories')
                    ->label("Kategori Berita")
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
                Forms\Components\Select::make('locations')
                    ->label("Lokasi Berita")
                    ->relationship('locations', 'name')
                    ->preload()
                    ->searchable(),
                Forms\Components\FileUpload::make('photo_path')
                    ->label("Gambar Berita")
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content')
                    ->label("Konten Berita")
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label("Judul Berita")
                    ->searchable(),
                Tables\Columns\TextColumn::make('categories.name')
                    ->label('Kategori Berita')
                    ->badge(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label("Waktu Unggah")
                    ->formatStateUsing(fn($state) => Carbon::parse($state)->locale('id')->translatedFormat('d F Y')),
                Tables\Columns\TextColumn::make('locations.name')
                    ->label('Lokasi Berita')
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
