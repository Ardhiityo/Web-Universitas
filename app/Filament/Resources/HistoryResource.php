<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\History;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\HistoryResource\Pages;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;
    protected static ?string $navigationGroup = 'Information';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('History')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('content')
                    ->html()
                    ->wrap(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular()
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
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistory::route('/create'),
            'edit' => Pages\EditHistory::route('/{record}/edit'),
        ];
    }
}
