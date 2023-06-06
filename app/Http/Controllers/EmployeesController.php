<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function employees()
    {
        $employees = DB::table('employees')->get(); 
        return view('data.employees', compact('employees'));
       
    }
   
}
