<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
//            Stat::make('Ruangan Tersedia', Pengaduan::where('status', 'Belum Ditinjau')->count()),
//            Stat::make('Sedang Ditinjau', Pengaduan::where('status', 'Sedang Ditinjau')->count()),
//            Stat::make('Selesai', Pengaduan::where('status', 'Selesai')->count())
        ];
    }
}
