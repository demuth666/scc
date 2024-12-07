<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('User Detail')->schema([
                    TextInput::make('name')
                        ->label('Nama')
                        ->required(),
                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->unique(table: User::class, ignoreRecord: true)
                        ->required(),
                    TextInput::make('phone_number')
                        ->label('Nomor Telepon')
                        ->numeric()
                        ->minLength(11)
                        ->maxLength(15),
                    Select::make('roles')
                        ->options([
                            'user' => 'User',
                            'admin' => 'Admin',
                        ])->required(),
                    TextInput::make('password')
                        ->label('Password')
                        ->password()
                        ->required()
                        ->revealable()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        ->visible(fn ($livewire) => $livewire instanceof CreateUser)
                        ->rule(Password::default()),
                ])->columns(2),
                Section::make('New Password')->schema([
                    TextInput::make('new_password')
                    ->label('New Password')
                    ->password()
                    ->nullable()
                    ->rule(Password::default())
                    ->revealable(),
                    TextInput::make('new_password_confirmation')
                    ->password()
                    ->requiredWith('new_password')
                    ->same('new_password')
                    ->revealable()
                ])->visible(fn ($livewire) => $livewire instanceof EditUser)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Nama')
                ->searchable(),
                TextColumn::make('email')
                ->label('Email')
                ->searchable(),
                TextColumn::make('phone_number')
                ->label('Nomor Telepon')
                ->searchable(),
                TextColumn::make('roles')
                ->label('Roles')
                ->searchable()
                ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'user' => 'warning',
                        'admin' => 'success',
                    }),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
