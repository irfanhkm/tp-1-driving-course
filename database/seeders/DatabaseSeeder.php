<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Package;
use App\Models\Schedule;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->truncate();
        DB::table('packages')->truncate();
        DB::table('schedules')->truncate();
        DB::table('vehicles')->truncate();
        Driver::factory(4)->create();

        $this->seederPackage();
        $this->seederSchedules();
        $this->seederVehicles();

    }

    private function seederVehicles(): void {

        $vehiclesData = [
            [
                'name' => 'New Avanza Veloz',
                'brand' => 'Toyota',
                'photo_url' => "https://toyota-mobil.com/assets/img/mobil/Toyota_Avanza_Veloz.png",
                'machine_type' => "Manual"
            ],
            [
                'name' => 'New Rush',
                'brand' => 'Toyota',
                'photo_url' => "https://toyota-mobil.com/assets/img/mobil/Toyota_Rush.png",
                'machine_type' => "Matic"
            ],
            [
                'name' => 'Vios',
                'brand' => 'Toyota',
                'photo_url' => "https://toyota-mobil.com/assets/img/mobil/Toyota_Vios.png",
                'machine_type' => "Matic"
            ],
        ];

        Vehicle::query()->insert($vehiclesData);
    }

    private function seederSchedules(): void {
        $data = [];
        $weekDay = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];
        $weekEnd = ["Sabtu", "Minggu"];

        foreach ($weekDay as $day) {
            $data[] = [
                'start_time' => '07:00',
                'end_time' => '09:00',
                'day' => $day
            ];
            $data[] = [
                'start_time' => '09:00',
                'end_time' => '11:00',
                'day' => $day
            ];
            $data[] = [
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => $day
            ];
        }

        foreach ($weekEnd as $day) {
            $data[] = [
                'start_time' => '06:00',
                'end_time' => '08:00',
                'day' => $day
            ];
            $data[] = [
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => $day
            ];
            $data[] = [
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => $day
            ];
            $data[] = [
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => $day
            ];
            $data[] = [
                'start_time' => '15:00',
                'end_time' => '17:00',
                'day' => $day
            ];
        }

        Schedule::query()->insert($data);
    }

    private function seederPackage(): void {
        $packageData = [
            [
                'name' => 'Paket Mengemudi A (Manual) + SIM',
                'detail' => 'Paket mengemudi dengan mobil manual + pengurusan SIM',
                'price' => 90.000
            ],
            [
                'name' => 'Paket Mengemudi B (Matic) + SIM',
                'detail' => 'Paket mengemudi dengan mobil matic + pengurusan SIM',
                'price' => 100.000
            ],
            [
                'name' => 'Paket Mengemudi C',
                'detail' => 'Paket mengemudi sampai bisa !. Akan dikenakan tarif flat Rp 2.000.000',
                'price' => 0
            ],
            [
                'name' => 'Paket Mengemudi Lengkap (Matic & Manual) + SIM',
                'detail' => 'Paket mengemudi dengan mobil manual dan matic (bergantian) + pengurusan SIM',
                'price' => 110.000
            ],
            [
                'name' => 'Paket Mengemudi Melancarkan',
                'detail' => 'Bagi yang sudah pernah mengikuti kursus dan ingin melancarkan skill mengemudi di jalan raya',
                'price' => 80.000
            ]
        ];

        Package::query()->insert($packageData);
    }
}
