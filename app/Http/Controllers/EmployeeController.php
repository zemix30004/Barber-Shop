<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee1()
    {
        return view('employee.index1');
    }
    public function getEmployee2()
    {
        return view('employee.index2');
    }
    public function getEmployee3()
    {
        return view('employee.index3');
    }
}
