<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceEmployee extends Model
{
    protected $fillable = [
        'employee_id',
        'date',
        'status',
        'clock_in',
        'clock_out',
        'working_hours',
        'late',
        'early_leaving',
        'overtime',
        'total_rest',
        'created_by',
    ];

    protected $casts = [
        'clock_in'      => 'datetime',
        'clock_out'     => 'datetime',
    ];

    public function employees()
    {
        return $this->hasOne('App\Models\Employee', 'user_id', 'employee_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
