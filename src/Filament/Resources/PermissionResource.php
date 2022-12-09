<?php
namespace Sorethea\DdPermission\Filament\Resources;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Sorethea\DdPermission\Filament\Resources\PermissionResource\Pages\CreatePermission;
use Sorethea\DdPermission\Filament\Resources\PermissionResource\Pages\EditPermission;
use Sorethea\DdPermission\Filament\Resources\PermissionResource\Pages\ListPermissions;
use Spatie\Permission\Models\Permission;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';

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
                Tables\Columns\TextColumn::make("name")->searchable()->sortable(),
                Tables\Columns\TextColumn::make("roles_count")->label(trans("dd-permission::permission.roles"))->counts('roles'),
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

    protected static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->latest();
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPermissions::route('/'),
            'create' => CreatePermission::route('/create'),
            'edit' => EditPermission::route('/{record}/edit'),
        ];
    }
}
