<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index',compact('trainers'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retornar una vista
        return view('trainers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //para insertar a la Base de datos
    public function store(Request $request)
    {
        //Si ese request contiene ese archivo
        if ($request->hasFile('avatar')) {
           $file = $request -> file('avatar');
           //para acceder al nombre del archivo
           $nombre = time().$file->getClientOriginalName();

            $file -> move(public_path().'/images/',$nombre);
        }
        // return $request->all();
        // return $request -> input('name');

        $trainer = new Trainer();
        //name -> para acceder al campo de la BD
        $trainer -> name = $request ->input('name');
        $trainer -> avatar = $nombre;
        // $trainer 
        $trainer -> save();
        return 'Dato Almacenado';

        return $request;
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
