<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //inyeccion de dependencias

class DummyControler extends Controller
{
    //
     //function any(){
       // return 'any';
    //}
    function any(Request $request){
        //return 'any';
        $method = $request->method();
        return 'any, has llegado con el metodo '.$method;
    }
    function delete(){
        return 'delete';
    }
    function get(){
        //return 'get'. csrf_token();
        return view('dummy.dumy');
    }
    function post(){
        return 'post';
    }
    function put(){
        return 'put';
    }
}