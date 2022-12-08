<?php

namespace Sorethea\DdPermission\Filament\Resources;

use Sorethea\DdPermission\Filament\Resources\RoleResource\Pages;
use Sorethea\DdPermission\Filament\Resources\RoleResource\RelationManagers;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Spatie\Permission\Models\Role;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    protected static function getNavigationGroup(): ?string
    {
        return trans("dd-permission::permission.administrator");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => \Sorethea\DdPermission\Filament\Resources\RoleResource\Pages\ListRoles::route('/'),
            'create' => \Sorethea\DdPermission\Filament\Resources\RoleResource\Pages\CreateRole::route('/create'),
            'edit' => \Sorethea\DdPermission\Filament\Resources\RoleResource\Pages\EditRole::route('/{record}/edit'),
        ];
    }
}
