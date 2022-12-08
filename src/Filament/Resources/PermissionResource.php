<?php
namespace Sorethea\DdPermission\Filament\Resources;
use Sorethea\DdPermission\Filament\Resources\PermissionResource\Pages;
use Sorethea\DdPermission\Filament\Resources\PermissionResource\RelationManagers;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Spatie\Permission\Models\Permission;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                Tables\Columns\TextColumn::make("name")->searchable()->sortable(),
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
            'index' => \PermissionResource\Pages\ListPermissions::route('/'),
            'create' => \PermissionResource\Pages\CreatePermission::route('/create'),
            'edit' => \PermissionResource\Pages\EditPermission::route('/{record}/edit'),
        ];
    }
}
