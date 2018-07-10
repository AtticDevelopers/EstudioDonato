<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    public function getHistoriaView(){
      	return view('historia');
    }

    public function getHistoriaInicioView(){
    	return view('historia-extendida-inicio');
    }

    public function getHistoriaEvolucionView(){
    	return view('historia-extendida-evolucion');
    }

    public function getHistoriaActualidadView(){
    	return view('historia-extendida-hoy');
    }

}