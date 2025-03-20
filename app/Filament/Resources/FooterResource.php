<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Footer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\FooterResource\Pages;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;
    protected static ?string $navigationGroup = 'Article';
    protected static ?string $navigationIcon = 'heroicon-o-bars-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->directory('Footer')
                    ->image()
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->url()
                    ->prefixIcon('heroicon-m-globe-alt')
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube')
                    ->required()
                    ->url()
                    ->prefixIcon('heroicon-m-globe-alt')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')
                    ->required()
                    ->url()
                    ->prefixIcon('heroicon-m-globe-alt')
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->required()
                    ->url()
                    ->prefixIcon('heroicon-m-globe-alt')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('whatsapp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gmaps')
                    ->required()
                    ->url()
                    ->prefixIcon('heroicon-m-globe-alt')
                    ->maxLength(255),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                Tables\Columns\TextColumn::make('instagram')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('youtube')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('whatsapp')
                    ->limit(10)
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
