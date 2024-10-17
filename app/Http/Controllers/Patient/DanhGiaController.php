<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    public function index(){
        return view('patient.danh-gia');
    }
}
