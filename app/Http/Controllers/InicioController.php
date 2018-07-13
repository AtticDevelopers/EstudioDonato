<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function getInicioView(){
    	$arregloAreas = DB::select('select nombre, descripcionCorta from areas');
    	return view('inicio', ['areas' => $arregloAreas])->with(["page" => "home"]);
    }

}
