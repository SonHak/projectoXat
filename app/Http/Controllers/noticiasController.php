<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;


class noticiasController extends Controller
{
    //
    public function mostrarNoticias(){
    	$noticias = new noticias;
		$arrayNoticias = $noticias::all();

		return view('noticias', ['arrayNoticias' => $arrayNoticias]);
	}


}
