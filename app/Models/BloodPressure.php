<?php

namespace App\Models;

use Database\Factories\BloodPressureFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['user_id', 'measured_in', 'measured_at', 'diastolic_pressure', 'systolic_pressure', 'pulse_pressure', 'remark'])]
#[Table('blood_pressures')]
class BloodPressure extends Model
{
    /** @use HasFactory<BloodPressureFactory> */
    use HasFactory, SoftDeletes;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
}
