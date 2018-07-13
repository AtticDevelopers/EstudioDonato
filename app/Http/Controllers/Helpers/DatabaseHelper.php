<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseHelper extends Controller
{
    public function selectAll($nombreTabla){
    	return DB::select('select * from '. $nombreTabla);
    }

    public function selectID($nombreTabla, $ID){
    	return DB::select('select * from ' . $nombreTabla . ' where id = ' . $ID);
    }
}