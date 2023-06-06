<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        $events = DB::table('events')->select('id','name_event','description','date_event','address','price','tickets')->get();

        return view('home',['events' => $events]);
    }
}
