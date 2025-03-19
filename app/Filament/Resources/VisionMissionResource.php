<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\VisionMissionResource\Pages;
use App\Models\VisionMission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VisionMissionResource extends Resource
{
    protected static ?string $model = VisionMission::class;
    protected static ?string $navigationGroup = 'Information';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TinyEditor::make('vision')
                    ->required()
                    ->columnSpanFull(),
                TinyEditor::make('mission')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->multiple()
                    ->directory('VisionMission')
                    ->minFiles(3)
                    ->maxFiles(3)
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vision')
                    ->limit(30)
                    ->wrap(),
                Tables\Columns\TextColumn::make('mission')
                    ->limit(30)
                    ->wrap(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular()
                    ->stacked()
                    ->ring(5)
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
            'index' => Pages\ListVisionMissions::route('/'),
            'create' => Pages\CreateVisionMission::route('/create'),
            'edit' => Pages\EditVisionMission::route('/{record}/edit'),
        ];
    }
}
