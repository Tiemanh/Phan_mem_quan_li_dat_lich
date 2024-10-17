<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BacSiController extends Controller
{
    public function index(){
        return view('patient.thong-tin-bac-si');
    }
}
