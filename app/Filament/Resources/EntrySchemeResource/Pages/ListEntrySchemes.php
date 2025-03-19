<?php

namespace App\Filament\Resources\EntrySchemeResource\Pages;

use App\Filament\Resources\EntrySchemeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntrySchemes extends ListRecords
{
    protected static string $resource = EntrySchemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
