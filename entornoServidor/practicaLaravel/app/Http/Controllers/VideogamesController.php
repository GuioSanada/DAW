<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class VideogamesController extends Controller
{
    //
    public function index(){
        //return "Videogames juajuajuajua";
        $arrayVideojuegos = ['Super Mario 64', 'Final Fantasy VII', 'Metal Gear Solid', 'Fifa22'];
        return view('videogames', ['videogames' => $arrayVideojuegos]);
    }
    public function show($id){
        return "Videogames $id";
    }
}
