<?php

namespace App\Forms\Components;

use App\Models\ProgramStage;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class ProgramStageIdSelect extends Select
{

    public static function make(string $name): static
    {
        return parent::make($name)
            ->label('Programe Stage')
            ->prefixIcon('heroicon-o-bookmark')
            ->prefixIconColor('primary')
            ->searchable()
            ->native(false)
            ->options(fn() => ProgramStage::all()->pluck('name', 'id'))
            ->createOptionForm([
                Textarea::make('name')
                    ->required()
                    ->prefixIcon('heroicon-o-bookmark')
                    ->prefixIconColor('primary'),
                Textarea::make('description'),
                DatePicker::make('start_date')
                    ->native(false)
                    ->prefixIcon('heroicon-o-calendar-days')
                    ->prefixIconColor('primary'),
                DatePicker::make('end_date')
                    ->native(false)
                    ->prefixIcon('heroicon-o-calendar-days')
                    ->prefixIconColor('primary')
            ])
            ->createOptionUsing(function (array $data) {

                $resultInput = ProgramStage::create([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'start_date' => $data['start_date'],
                    'end_date' => $data['end_date'],
                ]);

                return $resultInput->id;
            });
    }

}