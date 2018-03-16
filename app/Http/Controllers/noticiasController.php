<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;


class noticiasController extends Controller
{
    //
    public function mostrarNoticias(){

    	$noticias = noticias::where("importante",'!=','2')	
    				->orderBy('importante','desc')
    				->orderBy('created_at')	
    				->get();

    	$categoria = noticias::distinct()->get(['categoria']);
		return view('layouts.welcome', ['arrayNoticias' => $noticias])->with('arrayCategorias',$categoria);
	}

	public function categoriaSeleccionada(Request $request){

		$categoria = $request -> input('categoria');

		$noticias = noticias::where("categoria","=",$categoria)
							->orderBy('importante','desc')
    						->orderBy('created_at')	
    						->get();

    	$categoria = noticias::distinct()->get(['categoria']);	
    	return $noticias;
	}
}
