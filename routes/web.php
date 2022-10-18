<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//string
Route:: get ('coba', function (){
    return ('halooooo:D');
});

//array
Route:: get ('coba1', function(){
    return ['petra', 'mus', 'starry'];
});

//objek json
Route:: get ('coba2', function(){
    return [
        'Nama' => "Patria N",
        'Kelas' => "XII RPL 5",
        'NIS' => 3103120174
    ];
});

//objek json
Route:: get ('coba3',function(){
    return response()->json(
        [
            'Nama' => 'Patria N',
            'Kelas' => 'XII RPL 5',
            'NIS' => 3103120174
        ],201
    );
});