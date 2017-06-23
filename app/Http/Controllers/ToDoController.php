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

    public function store(Request $request){
        //Create an instance of to_dos table
        $to_do_instance = new ToDo;
        //insert input from post to instance
        $to_do_instance->to_do = $request->todo;
        // Save inserts the record into database
        $to_do_instance->save();
        return redirect()->back();
    }


}
