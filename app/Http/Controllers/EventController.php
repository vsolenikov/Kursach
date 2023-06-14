<?php

namespace App\Http\Controllers;

use App\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        $events = DB::table('events')->select('id','name_event','description','date_event','address','price','tickets')->get();

        return view('home',['events' => $events]);
    }
    public function create(Request $request){
//        $event = new Event();
//        $event->name_event = $request->input('name_event');
//        $event->date_event = $request->input('date_event');
//        $event->description = $request->input('description');
//        $event->address = $request->input('address');
//        $event->price = $request->input('price');
//        $event->tickets = $request->input('kolvo');
//        $event->save();

        $event = Event::create([
           'name_event' => $request['name_event'],
            'date_event' => $request['date_event'],
            'tickets' => $request['tickets'],
            'address' => $request['address'],
            'price' => $request['price'],
            'description' => $request['description']
        ]);
        return redirect('/home');
//        return view('home')->with('success', 'Сообщение было добавлено!');
    }
}
