<?php

namespace App\Forms\Components;

use App\Models\KelasSantri;
use Filament\Forms\Components\Select;



class KelasSantriIdSelect extends Select
{


public static function make(string $name): static
{
    return parent::make($name)
        ->label('Major')
        ->prefixIcon('heroicon-o-building-library')
        ->prefixIconColor('primary')
        ->searchable()
        ->native(false)
        ->options(fn()=> KelasSantri::all()->pluck('major', 'id'));
}

}