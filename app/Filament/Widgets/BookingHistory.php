<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\BookingResource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use Filament\Widgets\TableWidget as BaseWidget;

class BookingHistory extends BaseWidget
{
    public static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                BookingResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->columns([
                TextColumn::make('nama_lengkap')
                    ->label(' Nama')
                    ->searchable(),
                TextColumn::make('room.room_name')
                    ->label('Nama Ruangan')
                    ->searchable(),
                TextColumn::make('telepon')
                    ->label('No. Whatsapp')
                    ->searchable(),
                TextColumn::make('tanggal')
                    ->sortable()
                    ->label('Tanggal'),
                TextColumn::make('start_time')
                    ->label('Waktu Mulai'),
                TextColumn::make('end_time')
                    ->label('Waktu Selesai'),
                TextColumn::make('status')
                ->label('Status')
                ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'belum diverifikasi' => 'warning',
                        'ditolak' => 'danger',
                        'diverifikasi' => 'success',
                    }),
            ])
            ->filters([
                Filter::make('date')
                    ->form([
                        Forms\Components\DatePicker::make('dari tanggal'),
                        Forms\Components\DatePicker::make('sampai tanggal'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['dari tanggal'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal', '>=', $date),
                            )
                            ->when(
                                $data['sampai tanggal'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal', '<=', $date),
                            );
                    })
            ]);
    }
}
