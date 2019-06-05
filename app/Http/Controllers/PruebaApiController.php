<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PruebaApi;

class PruebaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pruebaApi = PruebaApi::all();
        // return view('pruebaApi.index', compact('pruebaApi'));
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
        $pruebaApi = new PruebaApi;
        $pruebaApi->ab1 = $request->input('ab1');
        $pruebaApi->ab2 = $request->input('ab2');
        $pruebaApi->ab3 = $request->input('ab3');
        $pruebaApi->ab4 = $request->input('ab4');
        $pruebaApi->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return PruebaApi::where('id', $id)->get();
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
        return PruebaApi::where('id', $id)->delete();
    }
}
