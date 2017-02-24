<?php 

namespace App\Http\Controllers;

//Db Dependencia
use App\Balance;

use Illuminate\Http\Request;

class ControllerBalance extends Controller
{
    
    public function list () {
    	
    	return view('balance', ['balance' => Balance::all()]);

    }
    
}

?>
