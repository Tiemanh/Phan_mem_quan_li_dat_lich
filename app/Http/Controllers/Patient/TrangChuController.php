<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index(){
        return view('patient.trang-chu');
    }
}
