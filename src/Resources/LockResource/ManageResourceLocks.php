<?php

namespace Blendbyte\FilamentResourceLock\Resources\LockResource;

use Blendbyte\FilamentResourceLock\ResourceLockPlugin;
use Blendbyte\FilamentResourceLock\Resources\LockResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ManageRecords;

class ManageResourceLocks extends ManageRecords
{
    protected static string $resource = LockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make(__('filament-resource-lock::manager.unlock_all'))
                ->label(__('filament-resource-lock::manager.unlock_all'))
                ->icon('heroicon-o-lock-open')
                ->action(fn () => ResourceLockPlugin::get()->getResourceLockModel()::truncate())
                ->requiresConfirmation(),
        ];
    }
}
