<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\AboutMe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\AboutMeResource\Pages;

class AboutMeResource extends Resource
{
    protected static ?string $model = AboutMe::class;
    protected static ?string $modelLabel = 'About';
    protected static ?string $navigationGroup = 'Article';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->directory('AboutMe')
                    ->multiple()
                    ->minFiles(3)
                    ->maxFiles(3)
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
                Tables\Columns\ImageColumn::make('image')
                    ->circular()
                    ->stacked()
                    ->ring(5),
                Tables\Columns\TextColumn::make('content')
                    ->limit(30)
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
            'index' => Pages\ListAboutMes::route('/'),
            'create' => Pages\CreateAboutMe::route('/create'),
            'edit' => Pages\EditAboutMe::route('/{record}/edit'),
        ];
    }
}
