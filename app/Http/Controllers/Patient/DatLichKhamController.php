<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatLichKhamController extends Controller
{
    public function index(){
        return view('patient.dat-lich-kham');
    }

    public function create(){
        return view('patient.dat-lich-kham-moi');
    }
}
