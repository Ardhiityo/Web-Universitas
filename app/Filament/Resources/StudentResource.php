<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Student;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\StudentResource\Pages;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;
    protected static ?string $navigationGroup = 'Resource';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('fullname')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, Set $set) {
                        $nickname = explode(' ', $state);
                        return $set('nickname', $nickname[0]);
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('nickname')
                    ->readOnly()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('entry_scheme_id')
                    ->columnSpanFull()
                    ->relationship('entryScheme', 'name')
                    ->label('Entry scheme')
                    ->required(),
                Forms\Components\Select::make('study_program_1_id')
                    ->relationship('studyProgramChoice1', 'name')
                    ->label('Study program choice 1')
                    ->required(),
                Forms\Components\Select::make('study_program_2_id')
                    ->relationship('studyProgramChoice2', 'name')
                    ->label('Study program choice 2')
                    ->different('study_program_1_id')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->directory('Student')
                    ->image()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('entryScheme.name')
                    ->limit(10)
                    ->sortable(),
                Tables\Columns\TextColumn::make('studyProgramChoice1.name')
                    ->label('Study program 1')
                    ->limit(10)
                    ->sortable(),
                Tables\Columns\TextColumn::make('studyProgramChoice2.name')
                    ->label('Study program 2')
                    ->limit(10)
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
