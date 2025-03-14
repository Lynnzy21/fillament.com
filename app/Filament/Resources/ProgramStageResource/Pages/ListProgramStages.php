<?php

namespace App\Filament\Resources\ProgramStageResource\Pages;

use App\Filament\Resources\ProgramStageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramStages extends ListRecords
{
    protected static string $resource = ProgramStageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
