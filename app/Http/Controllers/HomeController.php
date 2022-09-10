<?php
namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Package;
use App\Models\Schedule;
use App\Models\Vehicle;

class HomeController extends Controller
{
    public function home()
    {
        $scheduleMapInDay = [
            "Senin" => [],
            "Selasa" => [],
            "Rabu" => [],
            "Kamis" => [],
            "Jumat" => [],
            "Sabtu" => [],
            "Minggu" => []
        ];
        Schedule::query()->isActive()->get()->each(function ($schedule) use (&$scheduleMapInDay) {
            $scheduleMapInDay[$schedule->day][] = $schedule->start_time . " - " . $schedule->end_time;
        });
        return view('home', [
            'schedules' => $scheduleMapInDay,
            'packages' => Package::query()->isActive()->get(),
            'vehicles' => Vehicle::query()->isActive()->get(),
            'drivers' => Driver::query()->isActive()->get()
        ]);
    }
}
