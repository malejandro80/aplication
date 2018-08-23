<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function start(){
    	return view('inicio');
    }

    public function contact(){
    	return view('contacto');
    }

    public function specialties(){
    	return view('especialidades');
    }
}
