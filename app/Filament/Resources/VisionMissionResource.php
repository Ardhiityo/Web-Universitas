<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\VisionMission;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\VisionMissionResource\Pages;

class VisionMissionResource extends Resource
{
    protected static ?string $model = VisionMission::class;
    protected static ?string $navigationGroup = 'Information';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('vision_tagline')
                    ->required(),
                Repeater::make('vision')
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        Textarea::make('point')
                            ->required(),
                    ])
                    ->columnSpanFull(),
                Repeater::make('mission')
                    ->schema([
                        Textarea::make('mission')
                            ->required(),
                    ])
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
                Tables\Columns\TextColumn::make('vision_tagline')
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
