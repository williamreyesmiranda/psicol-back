<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boleta;

class BoletaController extends Controller
{
    /**
     * funcion para mostrar todas las boletas
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletas = Boleta::all();
        return $boletas;
    }

    /**
     * funcion para registrar boleta
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boleta = new Boleta();
        $boleta->codigo = $request->codigo;
        $boleta->descripcion = $request->descripcion;
        $boleta->precio = $request->precio;
        $boleta->stock = $request->stock;
        $boleta->save();
        return $boleta->id;

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
        $boleta = Boleta::findOrFail($request->id);
        $boleta->codigo = $request->codigo;
        $boleta->descripcion = $request->descripcion;
        $boleta->precio = $request->precio;
        $boleta->stock = $request->stock;
        $boleta->save();
        return $boleta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boleta = Boleta::destroy($id);
        return $boleta;
    }
}
