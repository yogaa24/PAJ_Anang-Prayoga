<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class VoterController extends Controller
{
    public function viewVoter()
    {
        return view('voters');
    } 

}
