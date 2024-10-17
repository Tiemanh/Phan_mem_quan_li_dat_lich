<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TuVanController extends Controller
{
    public function index()
    {
        return view('doctor.tu-van');
    }
    public function get()
    {
        return view('patient.tu-van');
    }

    public function chat_patient()
    {
        return view('patient.chat-tu-van');
    }

    public function chat_doctor()
    {
        return view('doctor.chat-tu-van');
    }
}
