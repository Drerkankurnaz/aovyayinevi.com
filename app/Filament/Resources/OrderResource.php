<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Sipariş';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Siparişler';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('book')
                    ->label('Kitap')->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->label('İsim')->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label('Telefon')->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tc')
                    ->label('TC Kimlik')->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->label('Adres')->maxLength(255),
                Forms\Components\TextInput::make('address_two')
                    ->label('Fatura Adresi')->maxLength(255),
                Forms\Components\TextInput::make('adet')
                    ->label('Adet')->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('book')
                    ->label('Kitap')->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('İsim')->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Telefon')->searchable(),
                Tables\Columns\TextColumn::make('tc')
                    ->label('TC Kimlik')->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->label('Adres')->searchable(),
                Tables\Columns\TextColumn::make('address_two')
                    ->label('Fatura Adresi')->searchable(),
                Tables\Columns\TextColumn::make('adet')
                    ->label('Adet')->searchable(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
