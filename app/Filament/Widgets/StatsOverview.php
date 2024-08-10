<?php

namespace App\Filament\Widgets;

use App\Models\Kursus;
use App\Models\Materi;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Menghitung jumlah total kursus dan materi
        $totalKursus = Kursus::count();
        $totalMateri = Materi::count();

        return [
            Stat::make('Total Kursus', $totalKursus)
                ->label('Total Kursus')
                ->description('Jumlah Kursus Yang Terdata')
                ->descriptionIcon('heroicon-o-book-open')
                ->icon('heroicon-o-book-open')
                ->color('success'),

            Stat::make('Total Materi', $totalMateri)
                ->label('Total Materi')
                ->description('Jumlah Materi Yang Terdata')
                ->descriptionIcon('heroicon-o-document-text')
                ->icon('heroicon-o-document-text')
                ->color('info'),
        ];
    }
}