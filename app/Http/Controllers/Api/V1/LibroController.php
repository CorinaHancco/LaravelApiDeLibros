<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Libro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required',
            'autor'=>'required',
            'año'=>'required',
            'genero'=>'required',
            'sinopsis'=>'required'
        ]);
        Libro::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'Libro Registrado Correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return response()->json([
            'res'=>true,
            'libro'=>$libro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo'=>'required',
            'autor'=>'required',
            'año'=>'required',
            'genero'=>'required',
            'sinopsis'=>'required'
        ]);
        $libro->update($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'Libro Editado Correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return response()->json([
            'res'=>true,
            'msg'=>'Libro Eliminado Correctamente'
        ]);
    }
}
