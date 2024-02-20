<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        return view('task.index');
    }
    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request){
        $validatedData = $request->validated(); 
        Task::create($validatedData);
        return redirect('/task');
    }
    
}