<?php

use App\Http\Controllers\ArticleController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get all articles
Route::get(
    '/articles',
    [ArticleController::class, 'index']
);

// get single article
Route::get(
    '/articles/{article}',
    [ArticleController::class, 'show'] 
);

// create new article 
Route::post(
    '/articles',
    [ArticleController::class, 'store']  
);

// update article
Route::put(
    '/articles/{article}',
    [ArticleController::class, 'update']
);

// delete article
Route::delete(
    '/articles/{article}',
    [ArticleController::class, 'delete'] 
);



/*
get('endpoint', function() { return something; });
post('endpoint', function(Request $request) { return something; });
get('endpoint', function(Request $request , $id) { return response; });
get('endpoint', function($id) { return response; });
*/

/*
ORM (Object Relational Mapping)
what is eloquent orm ?
eloquent is a php library that allows us to interact with the database using php objects
*/