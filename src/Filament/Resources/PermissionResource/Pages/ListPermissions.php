<?php

namespace Sorethea\DdPermission\Filament\Resources\PermissionResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Sorethea\DdPermission\Filament\Resources\PermissionResource;

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
