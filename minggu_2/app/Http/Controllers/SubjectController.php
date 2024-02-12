<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class SubjectController extends Controller
{
    public function studentsubject()
    {
        return view('Ss');
    } 
    public function teachersubject()
    {
        return view('Ts');
    } 
    public function adminsubject()
    {
        return view('As');
    } 
}
