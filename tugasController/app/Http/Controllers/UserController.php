<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class UserController extends Controller
{
    public function studentuser()
    {
        return view('Su');
    } 
    public function teacheruser()
    {
        return view('Tu');
    } 
    public function adminuser()
    {
        return view('Au');
    } 
}
