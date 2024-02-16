<?php

use App\Http\Controllers\AlarmController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TwitterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/alarm/create', [AlarmController::class, 'store']);

Route::post('/news/create', [NewsController::class, 'store']);
Route::post('/instagram/create', [InstagramController::class, 'store']);
Route::post('/twitter/create', [TwitterController::class, 'store']);

Route::get('/test/show', [TestController::class, 'show']);
Route::post('/test/create', [TestController::class, 'create']);
Route::get('/test/ping', [TestController::class, 'ping']);


Route::get('/el', function () {
//    $client = Elasticsearch\ClientBuilder::create()->build();
//    $client = Elasticsearch\ClientBuilder::create()->build();
    $client = Elastic\Elasticsearch\ClientBuilder::create()->build();
    var_dump($client);
});




