<?php

namespace Sorethea\DdPermission\Filament\Resources\PermissionResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use PermissionResource;

class EditPermission extends EditRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
