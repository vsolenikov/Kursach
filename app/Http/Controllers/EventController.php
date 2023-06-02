<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        $events = DB::table('events')->select('name_event','description','date_event','address','price')->get();

        return view('home',['events' => $events]);
    }
}
