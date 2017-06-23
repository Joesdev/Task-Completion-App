<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

class ToDoController extends Controller
{

    public function index(){
        $todo_data = ToDo::all();

        return view('todo', compact('todo_data'));
    }


}
