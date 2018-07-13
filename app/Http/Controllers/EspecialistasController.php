<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Helpers\Abogado;

class EspecialistasController extends Controller
{
    public function getEspecialistasView(){
<<<<<<< HEAD
      	return view('especialistas')->with(["page" => "especialistas"]);;
=======
    	$areasEspecialistas = DB::select('SELECT * FROM areasespecialistas NATURAL JOIN especialistas WHERE IDEspecialista = id');
    	$arreglo = array();
    	foreach($areasEspecialistas as &$area){

    		$abogado = new Abogado();
    		$abogado->nombre = $area->nombre;
    		$abogado->apellido = $area->apellido;
    		$abogado->telefono = $area->telefono;
    		$abogado->email = $area->email;

    		if (array_key_exists($area->nombreArea, $arreglo)){
    			$arreglo_viejo = $arreglo[$area->nombreArea];
    			array_push($arreglo_viejo, $abogado);
    			$arreglo_abogados = $arreglo_viejo;
    		} else {
    			$arreglo_abogados = array();
    			array_push($arreglo_abogados, $abogado);
    		}
    		$arreglo[$area->nombreArea] = $arreglo_abogados;
    	}
      	return view('especialistas', ['especialistas' => $especialistas, 'areas' => $arreglo]);
>>>>>>> cda289b7cf13fa04e4239f33a55ecf3c0227d2c0
    }
}
