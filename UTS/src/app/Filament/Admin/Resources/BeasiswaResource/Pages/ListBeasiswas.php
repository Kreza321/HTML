<?php

namespace App\Filament\Admin\Resources\BeasiswaResource\Pages;

use App\Filament\Admin\Resources\BeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeasiswas extends ListRecords
{
    protected static string $resource = BeasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
