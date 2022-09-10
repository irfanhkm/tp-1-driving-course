<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'schedules' => json_decode(File::get(storage_path('app/static/schedules.json'))),
            'packages' => json_decode(File::get(storage_path('app/static/packages.json'))),
            'vehicles' => json_decode(File::get(storage_path('app/static/vehicles.json'))),
            'drivers' => json_decode(File::get(storage_path('app/static/drivers.json'))),
        ]);
    }
}
