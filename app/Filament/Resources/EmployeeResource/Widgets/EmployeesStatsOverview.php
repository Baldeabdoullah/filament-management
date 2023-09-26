<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeesStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $nigeria = Country::where('country_code', 'NI')->withCount('employees')->first();
        $ghana = Country::where('country_code', 'Gh')->withCount('employees')->first();
        return [
            Card::make('Tous les Employees', Employee::all()->count()),
            Card::make('Employes du Nigeria', $nigeria ? $nigeria->employees_count : 0),
            Card::make('Employes du ghana',  $ghana ?  $ghana->employees_count : 0),
        ];
    }
}
