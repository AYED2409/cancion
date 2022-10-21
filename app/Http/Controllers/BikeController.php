<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bikes = Bike::all();
        //dd('a',[$bikes],'b');
        //dd($bikes);
        
        //return view('bike.bike');
        return view('bike.bike',['activeBike'=>'active','subTitle'=>'Bikes - Index','bikes'=>$bikes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return 'crear bike';
        return view ('bike.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request llegan todos los argumentos del formulario
        $bike=new Bike($request->all());
        $bike->save();
        return redirect('bike');
        //return view('bike.store',['name'=>$request->input('name')]);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    /*public function show(Bike $bike)
    {
        //
        return "mostrar bike";
  
    }
    */
     public function show($id)
    {
        // show(request $request, Bike $bike)
        //quitar find
        
        
        //return "mostrar bike ".$id;
        $bike=Bike::find($id);
        
        return view('bike.show',['activeBike'=>'active','bike'=>$bike,'subTitle'=>'Bikes-Show']);
  
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        //
       // return "editar la bike".$id;
      // return view('bike.edit');
      return view ('bike.edit',['activeBike' =>'bike','bike' => $bike, 'subTitle' => 'Bike - Edit Bikes']);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
        //$method = $request->method();
        //return 'update,actualizar la bike: '.$id. 'has llegado con el metodo '.$method;
        //try, devolver un mensaje
        $bike->update($request->all());
        return redirect('/bike');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,bike $bike)
    {
        //
        //$method = $request->method();
        //return 'destroy, has llegado con el metodo '.$method;
        //return 'se borrara la bici con id:'+$id;
        
        //try -catch, devolver un mensaje de resultado
        
        $bike->delete();
        //return view('bike.destroy',[])
        return redirect('/bike/bike');
    }
}