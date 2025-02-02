<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
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
        $pruebas = new Prueba;
        $pruebas->ab1 = $request->input('ab1');
        $pruebas->ab2 = $request->input('ab2');
        $pruebas->ab3 = $request->input('ab3');
        $pruebas->ab4 = $request->input('ab4');
        $pruebas->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prueba = Prueba::find($id);
        return view('prueba.show', compact('prueba'));
        // return Prueba::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prueba = Prueba::find($id);
        return view('prueba.edit', compact('prueba'));
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
        $prueba = Prueba::find($id);
        $prueba->ab1 = $request->input('ab1');
        $prueba->ab2 = $request->input('ab2');
        $prueba->ab3 = $request->input('ab3');
        $prueba->ab4 = $request->input('ab4');
        //$prueba->fill($request->all());
        $prueba->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prueba = Prueba::find($id);
        $prueba->delete();
        return back();
    }
}
