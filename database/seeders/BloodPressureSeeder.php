<?php

namespace Database\Seeders;

use App\Models\BloodPressure;
use Illuminate\Database\Seeder;

class BloodPressureSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $bloodPressures = [
            [
                'id'                 => 1,
                'user_id'            => 1,
                'measured_in'        => '2025-05-20',
                'measured_at'        => '12:45:00',
                'diastolic_pressure' => 113,
                'systolic_pressure'  => 79,
                'pulse_pressure'     => 81,
                'remark'             => null,
                'created_at'         => '2025-05-20 04:32:57',
                'updated_at'         => '2025-05-20 04:32:57',
                'deleted_at'         => null,
            ],
        ];

        BloodPressure::insert($bloodPressures);
    }
}
