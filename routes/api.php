<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ReturnController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [ApiController::class, 'login']);
Route::middleware(['auth:api'])->group(function(){
Route::group(['middleware' => 'appAccess'], function () {

Route::get('products/{id?}', [ApiController::class, 'getproducts']);
Route::get('mastercases/{id?}', [ApiController::class, 'getmastercases']);
Route::get('mcproducts/{mcid}', [ApiController::class, 'getmcproducts']);
Route::get('warehouses/{id?}', [ApiController::class, 'getwarehouses']);
Route::get('pickorders/pending/{transaction?}', [ApiController::class, 'getpendingpickorders']);
Route::get('pickorders/confirmed/{transaction?}', [ApiController::class, 'getconfirmedpickorders']);
Route::get('binlocation/{id}', [ApiController::class, 'getbinlocation']); 
Route::get('confirmpo/{id}/{user}', [ApiController::class, 'confirmpickorder']);  
Route::get('getmcpro/{id}', [ApiController::class, 'getmastercase_products']); 
Route::get('recievedproducts/{id?}', [ApiController::class, 'getrecieved']);
Route::get('assignedcheckin', [ApiController::class, 'getassignedcheckin']);
Route::get('unassignedcheckin', [ApiController::class, 'getunassignedcheckin']);
Route::get('assignedcheckinstatus/{id}', [ApiController::class, 'getassignedcheckinstatus']);
Route::get('checkedin/{palletno}/{user}', [ApiController::class, 'checkedin']);

Route::get('racks/{warehouse}', [ApiController::class, 'getrackinfo']);
Route::get('binlocationbyrack/{rack}', [ApiController::class, 'getbinlocationbyrack']);

Route::post('startcyclecount', [ApiController::class, 'startcyclecount']);
Route::get('markcyclecount/{id}/{palletno}', [ApiController::class, 'markcyclecount']);
Route::get('cyclecountlocations/{ccid}', [ApiController::class, 'cyclecountlocations']);
Route::get('cyclecountclose/{ccid}', [ApiController::class, 'cyclecountclose']);
Route::get('cyclecountcancel/{ccid}', [ApiController::class, 'cyclecountcancel']);

Route::get('confirmedcyclecounts/{id?}', [ApiController::class, 'getcyclecounts']);
Route::get('confirmedcyclecountslist/{ccid}', [ApiController::class, 'cclocationslist']);

Route::post('newtransfer', [ApiController::class, 'newtransfer']);
Route::get('transfers/{id?}', [ApiController::class, 'gettransfers']);
Route::get('transfer/confirmed', [ApiController::class, 'pendingtransfers']);
Route::get('transfer/picked', [ApiController::class, 'pickedtransfers']);
Route::get('transfer/placed', [ApiController::class, 'placedtransfers']);

Route::get('markpickedtransfer/{tid}/{user}', [ApiController::class, 'marked_picked_transfer']);
Route::get('markplacedtransfer/{tid}/{user}', [ApiController::class, 'marked_placed_transfer']);
Route::get('getdatafortransfer/{barcode}', [ApiController::class, 'getdatafortransfer']);

Route::get('return/pending/{id?}', [ApiController::class, 'getpendingreturn']);
Route::get('return/confirmed/{id?}', [ApiController::class, 'getconfirmedreturn']);
    
Route::get('pendingreturn', [ReturnController::class, 'pendingreturn']);
});
});


