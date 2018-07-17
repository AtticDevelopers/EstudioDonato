<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Helpers\Abogado;

class EspecialistasController extends Controller
{
    public function getEspecialistasView(){
        $especialistas = DB::select('SELECT * FROM especialistas ORDER BY apellido');
        $areasEspecialistas = DB::select('SELECT * FROM areas NATURAL JOIN areas_especialistas NATURAL JOIN especialistas ORDER BY nombreArea');
        $arreglo_areas = array();
        foreach($areasEspecialistas as &$area){

            $abogado = new Abogado();
            $abogado->nombre = $area->nombre;
            $abogado->apellido = $area->apellido;
            $abogado->telefono = $area->telefono;
            $abogado->email = $area->email;

            if (array_key_exists($area->nombreArea, $arreglo_areas)){
                $arreglo_viejo = $arreglo_areas[$area->nombreArea]['abogados'];
                array_push($arreglo_viejo, $abogado);
                $arreglo_abogados = $arreglo_viejo;
            } else {
                $arreglo_abogados = array();
                array_push($arreglo_abogados, $abogado);
                $arreglo_general = array();
                $arreglo_general['IDArea'] = $area->IDArea;
                $arreglo_general['descripcionLarga'] = $area->descripcionLarga; 
            }
            $arreglo_general['abogados'] = $arreglo_abogados; 
            $arreglo_areas[$area->nombreArea] = $arreglo_general;
        }
        return view('especialistas', ['especialistas' => $especialistas, 'areas' => $arreglo_areas, 'page' => 'especialistas']);
    }
}
