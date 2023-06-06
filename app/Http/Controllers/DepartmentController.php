<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departments()
    {
        
        $departments = DB::table('departments')->get(); 
        return view('data.departments', compact('departments'));
       
    }
}
