<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Departments;
use Illuminate\Support\Facades\DB;


class AllviewController extends Controller
{
    public function Allview()
    {
        $employees = Employees::all();
        $departments = Departments::all();

        
        return view('data.Allview', compact('employees', 'departments'));
    }
}
