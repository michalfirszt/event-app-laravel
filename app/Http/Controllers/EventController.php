<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display registration form for the event.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event.index');
    }
}
