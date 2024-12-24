<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomsResource\Pages;
use App\Filament\Resources\RoomsResource\RelationManagers;
use App\Models\Rooms;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class RoomsResource extends Resource
{
    protected static ?string $model = Rooms::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                TextInput::make('room_name')
                ->label('Nama Ruangan'),
                TextInput::make('description')
                ->label('Deskripsi Ruangan'),
               Select::make('facilities')
                   ->label('Fasilitas')
                   ->relationship('facility', 'facility_name') // Menggunakan relasi
                   ->multiple() // Mendukung banyak pilihan
                   ->preload() // Memuat data fasilitas untuk performa lebih baik
                   ->required(),
                FileUpload::make('images')
                ->label('Gambar Ruangan')
                ->image()
                ->directory('room_images')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('room_name')
                ->label('Nama Ruangan'),
                TextColumn::make('description')
                ->label('Deskripsi Ruangan'),
                TextColumn::make('facility.facility_name')
                    ->badge()
                    ->label('Fasilitas'),
                ImageColumn::make('images')
                ->label('Gambar Ruangan')
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRooms::route('/create'),
            'view' => Pages\ViewRooms::route('/{record}'),
            'edit' => Pages\EditRooms::route('/{record}/edit'),
        ];
    }
}
