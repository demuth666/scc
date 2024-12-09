<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Filament\Resources\BookingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;


class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'Belum Diverifikasi' => Tab::make()->query(fn($query) => $query->where('status', 'belum diverifikasi')),
            'Ditolak' => Tab::make()->query(fn($query) => $query->where('status', 'ditolak')),
            'Diverifikasi' => Tab::make()->query(fn($query) => $query->where('status', 'diverifikasi')),
        ];
    }
}
