<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Santri')
                ->color('primary')
                ->icon('heroicon-o-user-plus'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'Admin' => Tab::make()->query(fn($query) => $query->where('role', 'ADMIN')),
            'Santri' => Tab::make()->query(fn($query) => $query->where('role', 'STUDENT')),
            'Mentor' => Tab::make()->query(fn($query) => $query->where('role', 'TEACHER')),
            'Leader' => Tab::make()->query(fn($query) => $query->where('role', 'LEADER')),
            'Ustadz' => Tab::make()->query(fn($query) => $query->where('role', 'USTADZ')),
            'All' => Tab::make(),
        ];
    }
}
