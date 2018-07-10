<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialistasController extends Controller
{
    public function getEspecialistasView(){
      	return view('especialistas');
    }
}