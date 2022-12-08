<?php

namespace Sorethea\DdPermission\Filament\Resources\RoleResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Sorethea\DdPermission\Filament\Resources\RoleResource;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
