<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employees extends Model
{
    protected $table = 'employees'; // ชื่อตาราง employees

    public function department()
    {
        return $this->belongsTo(Departments::class, 'employee_id');
    }
}
