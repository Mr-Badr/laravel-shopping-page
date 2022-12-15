<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/', [StaticController::class, 'index']);
Route::get('/portfolio', [StaticController::class, 'portfolio']);
Route::get('/contact', [StaticController::class, 'contact']);
Route::get('/about', [StaticController::class, 'about']);

/* Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if (isset($category)) {
        if (isset($item)){
            return "<h1> {$item} </h1>";
        }
        return "<h1> {$category} </h1>";
    }
    return '<h1>Store</h1>';
}); */

/* Route::get('/store', function () {
    
    $filter = request('store');
    if (isset($filter)){
        return 'this page is viewing <span style="color: red">'.$filter.'</span>';
    }
    return 'this page is viewing <span style="color: red">All products</span>';
}); */
