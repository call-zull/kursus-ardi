<?php

namespace App\Filament\Resources\KursusResource\Pages;

use App\Filament\Resources\KursusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKursus extends EditRecord
{
    protected static string $resource = KursusResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}