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

		return view('layouts.welcome', ['arrayNoticias' => $noticias]);
	}


}
