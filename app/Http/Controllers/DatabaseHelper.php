<?php

namespace App\Http\Controllers\Helpers;

class DatabaseHelper {
    public function selectAll($nombreTabla){
    	return DB::select('select * from '. $nombreTabla);
    }

    public function selectID($nombreTabla, $ID){
    	return DB::select('select * from ' . $nombreTabla . ' where id = ' . $ID);
    }
}