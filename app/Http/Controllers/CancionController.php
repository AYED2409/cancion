<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $canciones = Cancion::all();
               return view('cancion.index',['activeBike'=>'active','subTitle'=>'Bikes - Index','canciones'=>$canciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cancion.create');
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
        $cancion = new cancion($request->all());
        $cancion->save();
        return redirect('cancion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cancion =Cancion::find($id);
        return view('cancion.show',['activeCancion'=>'active','cancion'=>$cancion,'subTitle'=>'Cancion-Show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancion $cancion)
    {
        //
        return view ('cancion.edit',['activeCancion' =>'cancion','cancion' => $cancion, 'subTitle' => 'Cancion - Edit cancion']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion)
    {
        //
         $cancion->update($request->all());
        return redirect('/cancion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        //
        $cancion->delete();
        //return view('bike.destroy',[])
        return redirect('/cancion');
    }
}
