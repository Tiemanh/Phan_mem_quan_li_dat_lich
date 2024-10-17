<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LichHenController extends Controller
{
    public function index(){
        return view('doctor.lich-hen');
    }
}
