<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Comentarios;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/store', function () {
    return view('store');
});

Route::post('/enviar/datos', function () {
    //enviar el correo
    $datos = request()->all(); //captura los datos y retorna en pantalla
    Mail::send('correo.mensaje', $datos, function($message) use ($datos){
        $message->from($datos['correo'], $datos['nombre'])->to('asesoriafinan2021@gmail.com', 'asesoria')
        ->subject($datos['apellido']);
    });
    return back()->with('flash', $datos['nombre'].'Tu mensaje ha sido recibido');
})->name('enviarDatos');

Route::post('/enviar/comentario', [Comentarios::class, 'agregar'])->name('enviarComentario');