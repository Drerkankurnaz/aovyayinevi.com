<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WriterResource\Pages;
use App\Filament\Resources\WriterResource\RelationManagers;
use App\Models\Writer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WriterResource extends Resource
{
    protected static ?string $model = Writer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Yazar';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Yazarlar';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Başlık')->maxLength(255),
                Forms\Components\FileUpload::make('photo')
                    ->label('Fotoğraf')->image()
                    ->directory('writers')
                    ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('900')
                    ->imageResizeTargetHeight('1200')
                    ->disk('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')->searchable(),
                Tables\Columns\TextColumn::make('photo')
                    ->label('Fotoğraf')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma Tarihi')->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Güncellenme Tarihi')->dateTime()
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
            'index' => Pages\ListWriters::route('/'),
            'create' => Pages\CreateWriter::route('/create'),
            'edit' => Pages\EditWriter::route('/{record}/edit'),
        ];
    }
}
