<?php

namespace PermissionResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use PermissionResource;

class ListPermissions extends ListRecords
{
    protected static string $resource = PermissionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
