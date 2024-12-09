<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Rooms;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Ruangan', Rooms::count()),
            Stat::make('Jumlah Booking', Booking::count()),
            Stat::make('Jumlah User', User::count())
        ];
    }
}
