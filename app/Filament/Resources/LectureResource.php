<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LectureResource\Pages;
use App\Models\Lecture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LectureResource extends Resource
{
    protected static ?string $model = Lecture::class;
    protected static ?string $navigationGroup = 'Resource';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nidn')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('education')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('topic')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->columnSpanFull()
                    ->directory('Lecture')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->limit(10),
                Tables\Columns\TextColumn::make('nidn')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('education')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_title')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('topic')
                    ->limit(10)
                    ->searchable(),
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
            'index' => Pages\ListLectures::route('/'),
            'create' => Pages\CreateLecture::route('/create'),
            'edit' => Pages\EditLecture::route('/{record}/edit'),
        ];
    }
}
