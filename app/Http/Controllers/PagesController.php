<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Simple reroute to new.blade
    public function newView(){
        return view('new');
    }
}
