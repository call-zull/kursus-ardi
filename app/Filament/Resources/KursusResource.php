<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KursusResource\Pages;
use App\Filament\Resources\KursusResource\RelationManagers;
use App\Models\Kursus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KursusResource extends Resource
{
    protected static ?string $model = Kursus::class;

    protected static ?string $navigationLabel = 'Kursus';

    protected static ?string $pluralModelLabel = 'Kursus';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('durasi')
                    ->label('Durasi (Menit)')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    Tables\Columns\ImageColumn::make('image'),
                    TextColumn::make('judul')
                        ->label('Judul')
                        ->sortable()
                        ->searchable()
                        ->getStateUsing(fn($record) => 'Judul : ' . $record->judul),

                    TextColumn::make('deskripsi')
                        ->label('Deskripsi')
                        ->getStateUsing(fn($record) => 'Deskripsi : ' . $record->deskripsi),

                    TextColumn::make('durasi')
                    ->label('Durasi (Menit)')
                        ->numeric()
                    ->sortable()
                        ->getStateUsing(fn($record) => 'Durasi : ' . $record->durasi . ' menit'),

                    TextColumn::make('materi')
                        ->label('Materi')
                        ->getStateUsing(
                            fn($record) =>
                            'Materi : ' . $record->materi->pluck('judul')->implode(', ')
                        ),
                ])
            ])->contentGrid([
                    'md' => 2,
                    'xl' => 2,
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKursuses::route('/'),
            'create' => Pages\CreateKursus::route('/create'),
            'edit' => Pages\EditKursus::route('/{record}/edit'),
        ];
    }
}