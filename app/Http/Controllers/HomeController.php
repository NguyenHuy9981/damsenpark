<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    function detail($id) {
        $event = Event::find($id);
        return view('event.detail', compact('event'));
    }



}




