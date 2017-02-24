<?php 

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;

class ControllerList extends Controller
{
    
    public function store (Request $request) {
    	//var_dump($request);
        //echo $name = $request->input('uno');
        $actividad = Actividad::all();
        var_dump($actividad);
    }
    
}

?>