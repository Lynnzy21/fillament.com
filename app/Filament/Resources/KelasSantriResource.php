<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelasSantriResource\Pages;
use App\Filament\Resources\KelasSantriResource\RelationManagers;
use App\Models\KelasSantri;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelasSantriResource extends Resource
{
    protected static ?string $model = KelasSantri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kelas Santri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                                TextInput::make('mentor.name')
                                ->label('Nama Mentor')
                                ->required(),

                                Select::make('major')
                                ->label('Jurusan')
                                ->options([
                                    'Programer' => 'Programer',
                                    'Video Grafher' => 'Video Grafher',
                                    'Multimedia' => 'Multimedia',
                                    'Desaigner' => 'Desaigner',
                                    'Digital Marketing' => 'Digital Marketing',
                                    'Content Creator' => 'Content Creator',
                                    'Marketer' => 'Marketer',
                                    'Service' => 'Service',
                                ])
                                ]);
                  
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mentor.name')
                ->label('Nama Mentor')
                ->icon('heroicon-o-user')
                ->iconColor('primary')
                ->searchable()
                ->sortable(),

                TextColumn::make('major')
                ->label('Jurusan')
                ->icon('heroicon-o-percent-badge')
                ->iconColor('orange')
                ->searchable()
                ->sortable(),
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
            'index' => Pages\ListKelasSantris::route('/'),
            'create' => Pages\CreateKelasSantri::route('/create'),
            'edit' => Pages\EditKelasSantri::route('/{record}/edit'),
        ];
    }

    public static function  getNavigationBadge(): ?string
    {

        $kelasData = KelasSantri::all()->count();
        $stringCount = strval($kelasData);
        return $stringCount;
    }

    public static function getNavigationBadgeTooltip(): ?string{
        return 'Total Kelas Santri';
    }
}
