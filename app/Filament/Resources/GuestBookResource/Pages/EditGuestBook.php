<?php

namespace App\Filament\Resources\GuestBookResource\Pages;

use App\Filament\Resources\GuestBookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuestBook extends EditRecord
{
    protected static string $resource = GuestBookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // redirect ketika berhasil edit data
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
