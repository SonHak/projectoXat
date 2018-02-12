<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use DB;

use Illuminate\Support\Facades\Input;
use App\Denuncias;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class principalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbquery = DB::table('denuncias')->where('id_user', Auth::user()->id)->get();

        return view('layouts.principal',['arrayDenuncias' => $dbquery]);
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
    public function update(Request $request, $id)
    {
        //
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
}
