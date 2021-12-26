<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarberController extends Controller
{
    public function getBarber1()
    {
        return view('barbers.index1');
    }
    public function getbarber2()
    {
        return view('barbers.index2');
    }
    public function getbarber3()
    {
        return view('barbers.index3');
    }
}
