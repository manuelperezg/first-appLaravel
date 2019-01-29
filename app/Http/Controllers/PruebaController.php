<?php 

/**
 * 
 */
namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller
{
	public function prueba($name){
		return 'Estoy dentro de PruebaController :D '.$name;
	}
}

 ?>