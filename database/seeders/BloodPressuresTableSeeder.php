<?php

namespace Database\Seeders;

use App\Models\BloodPressure;
use Illuminate\Database\Seeder;

class BloodPressuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloodPressures = [
            [
                'id'                 => 1,
                'user_id'            => 1,
                'measured_in'        => '2021-08-22',
                'measured_at'        => '12:45:00',
                'diastolic_pressure' => 113,
                'systolic_pressure'  => 79,
                'pulse_pressure'     => 81,
                'remark'             => null,
                'created_at'         => '2021-08-23 04:32:57',
                'updated_at'         => '2021-08-23 04:32:57',
                'deleted_at'         => null,
            ],
        ];

        BloodPressure::insert($bloodPressures);
    }
}
