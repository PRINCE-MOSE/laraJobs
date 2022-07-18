<?php

use App\Models\Listings;
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

//All listings
Route::get('/', function () {
    return view('Listings',[
        'heading'=>'Latest Jobs',
        'listings'=>Listings::all()
    ]);
});

//Single listing
Route::get('/listings/{id}', function($id) {
    return view('Listing',[
        'listing'=>Listings::find($id)
    ]);
});