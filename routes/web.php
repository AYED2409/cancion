<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyControler;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CancionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

//se define una ruta que se accede con GET y la ruta es ruta1 y devuelve el texto hola mundo(no se hace nunca)
Route::get('ruta1', function () {
 return 'Hello World';
});

Route::get('ruta2', function () {
 return view('welcome');
});

Route::delete('delete', [DummyControler::class,'delete'])->name('dummy.delete');
Route::get('get', [DummyControler::class,'get'])->name('dummy.get');
Route::post('post',[DummyControler::class, 'post'])->name('dummy.post');
Route::put('put',[DummyControler::class,'put'])->name('dummy.put');
Route::any('any',[DummyControler::class, 'any'])->name('dummy.any');
Route::resource('bike',BikeController::class);


/*Route::get('bike', [BikeController::class,'index'])->name('bike.index');
Route::get('bike/create',[BikeController::class,'create'])->name('bike.create');
Route::get('bike/{id}', [BikeController::class,'show'])->name('bike.show');
Route::put('bike/{id}',[BikeController::class,'update'])->name('bike.update');
Route::delete('bike/{id}',[BikeController::class,'destroy'])->name('bike.destroy');
Route::get('bike/{id}/edit',[BikeController::class,'edit'])->name('bike.edit');
Route::post('bike',[BikeController::class, 'post'])->name('bike.post');
*/

Route::resource('persona',PersonaController::class);

Route::resource('cancion',CancionController::class);
