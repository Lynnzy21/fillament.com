<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramStageResource\Pages;
use App\Filament\Resources\ProgramStageResource\RelationManagers;
use App\Models\ProgramStage;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramStageResource extends Resource
{
    protected static ?string $model = ProgramStage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Program Santri')
                        ->icon('heroicon-o-globe-alt')
                        ->completedIcon('heroicon-o-globe-alt')
                        ->columns(2)
                        ->schema([
                            Section::make()
                                ->description('Informasi Program Santri')
                                ->schema([
                                    Grid::make([
                                        'md' => 1,
                                        'lg' => 2,
                                        'xl' => 4,
                                    ])->schema([
                                                // ToggleButtons::make('name')
                                                //     ->inline()
                                                //     ->options([
                                                //         'Main Futsal' => 'Main Futsal',
                                                //         'Main Basket' => 'Main Basket',
                                                //         'Partyan' => 'Partyan',
                                                //         'COC' => 'COC',
                                                //         'Olimpiade' => 'Olimpiade',
                                                //         'Ossis' => 'Ossis',
                                                //         'Kerja Bakti' => 'Kerja Bakti',
                                                //     ])
                                                ])
                                        ]),
                                ]),
                            ]),
                        ])
                        ->columns(1);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Name')
                ->sortable()
                ->searchable(),
                TextColumn::make('description')
                ->label('Description')
                ->sortable()
                ->searchable(),
                TextColumn::make('start_date')
                ->label('Start Date')
                ->sortable()
                ->searchable(),
                TextColumn::make('end_date')
                ->label('End Date')
                ->sortable()
                ->searchable(),
                

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProgramStages::route('/'),
            'create' => Pages\CreateProgramStage::route('/create'),
            'edit' => Pages\EditProgramStage::route('/{record}/edit'),
        ];
    }
}
