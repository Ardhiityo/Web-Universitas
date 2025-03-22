<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Greeting;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\GreetingResource\Pages;

class GreetingResource extends Resource
{
    protected static ?string $model = Greeting::class;
    protected static ?string $navigationGroup = 'Article';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('Greeting')
                    ->columnSpanFull()
                    ->required(),
                TinyEditor::make('content')
                    ->required()
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('content')
                    ->html()
                    ->wrap(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
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
            'index' => Pages\ListGreetings::route('/'),
            'create' => Pages\CreateGreeting::route('/create'),
            'edit' => Pages\EditGreeting::route('/{record}/edit'),
        ];
    }
}
