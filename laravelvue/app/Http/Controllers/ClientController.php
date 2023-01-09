<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Event;

class ClientController extends Controller
{
    public function store(Request $request){
    $event = new Event;
    
    $event->id = $request->id;
    $event->firstname = $request->name;
    $event->lastname = $request->lastname;
    $event->email = $request->email;
    $event->rgs = $request->rgs;
    $event->country = $request->country;
    $event->postalcode = $request->postalcode;
    $event->adress = $request->adress;
    $event->city = $request->city;
    $event->region = $request->region;

    $event->save();
    
   return redirect('/dashboard')->with('msg', 'Cadstro realizado com sucesso!');
}

}
