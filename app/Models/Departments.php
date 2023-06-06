<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'departments'; // ชื่อตาราง departments

    public function employees()
    {
        return $this->hasMany(Employees::class, 'employee_id');
    }
}
