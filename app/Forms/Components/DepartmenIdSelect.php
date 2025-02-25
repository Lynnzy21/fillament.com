<?php

namespace App\Forms\Components;

use App\Models\Departmen;
use App\Models\KelasSantri;
use Filament\Forms\Components\Select;

class DepartmenIdSelect extends Select
{
  public static function make(string $name): static 
  {
    return parent::make( $name)
      ->label('Amanah Department')
      ->prefixIcon('heroicon-o-building-library')
      ->prefixIconColor('primary')
      ->searchable()
      ->native(false)
      ->options(fn() => Departmen::all()->pluck('name', 'id'))
      ->required();
  }
}