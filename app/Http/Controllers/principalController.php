<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Denuncias;
use App\Mensajes;
use App\noticias;
use App\Chat;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class principalController extends Controller
{
    /**
     * Display a listing of the resource.
     *  ->with('arrayMensajes', response()->json($missatges)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->admin == 0 ){
            $arrayChats = Chat::all();
            $dbquery = Denuncias::where('id_user', Auth::user()->id)->get();
            return view('layouts.principalUser',['arrayDenuncias' => $dbquery])->with('id',Auth::user()->id)->with('arrayChats',$arrayChats);

        }else{
            $dbquery = Denuncias::all();
            return view('layouts.principalAdmin',['arrayDenuncias' => $dbquery])->with('id',Auth::user()->id);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $db = new Denuncias;
        $db -> titulo = $request -> input('titulo');
        $db -> desc = $request -> input('texto'); 
        $db -> id_user = Auth::user()->id;  
        $db -> created_at = $request -> input('fecha');
        $ruta = 'App/storage';
        $db -> foto = Input::file('imagen')->move($ruta);

        $db -> save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         $id = $request -> input('id');
         $respuesta = $request -> input('respuesta');
         $db = Denuncias::find($id)->where('id',$id)->update(['respuesta' => $respuesta,'activa' => 1]);
         #$db -> respuesta = $request -> input('respuesta');
         #$db -> save();
         return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajaxRequest(Request $request){
        $mensajes = new Mensajes;
        $mensajes -> id_user = $request -> input('usuario');
        $mensajes -> fecha = date('Y-m-d H:i:s');
        $mensajes -> mensaje = $request -> input('texto');
        $mensajes -> id_chat = $request -> input('idChat');
        $mensajes -> save();
    }


    public function recibirMensajes(Request $request){
        $horaActual = Carbon::now();
        $diferencia = $horaActual->subHour();
        $idchat = $request -> input('idchat');


        $missatges = Mensajes::with("usuario")->where('id_chat','=',$idchat)
                                              ->where('created_at','>=',$diferencia)
                                              ->get();
        if(sizeof($missatges) == 0 || count($missatges) == 0){
            $missatges = Mensajes::with("usuario")->where('id_chat','=',$idchat)
                                                  ->take(20)
                                                  ->get();
        }
       /* $missatges = Mensajes::with("usuario")->get();*/

        return $missatges;
    }





    public function formularioNoticia(Request $request){
        $db = new noticias;
        $db -> titulo = $request -> input('titulo');
        $db -> desc = $request -> input('desc');
        $ruta = 'App/storage';
        $db -> imagen = Input::file('foto')->move($ruta); 
        if($request -> input('importante') == true){
            $db -> importante = 1;
        }
        else{
            $db -> importante = 0;
        }
        $db -> created_at = date('Y-m-d H:i:s');
        $db -> categoria = $request -> input('categoria');
       

        $db -> save();

        return redirect('home');
    }
}
