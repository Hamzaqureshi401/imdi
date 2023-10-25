<?php

use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\PickorderController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\CyclecountController;
use App\Http\Controllers\EmployeeAuthController;


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

 
Route::get('/create-account', [MainController::class, 'createaccount'])->name('createaccount');
Route::post('/register-account', [MainController::class, 'registeraccount'])->name('registeraccount');
Route::post('/update-account', [MainController::class, 'updateaccount'])->name('updateaccount');
Route::post('/forgotpassword', [MainController::class, 'forgotpassword'])->name('forgotpassword');
Route::post('/update-account-ind', [MainController::class, 'updateaccountind'])->name('updateaccountind');


Auth::routes();
 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user/profile', [UserController::class, 'profile'])->name('profile');
Route::resource('user',UserController::class);

// Start of Product Routes 

Route::get('/product/import', [ProductController::class, 'importview'])->name('import');
Route::post('/product/importsave', [ProductController::class, 'import'])->name('importsave');
Route::resource('product',ProductController::class);
// End of Product Routes

 
// Start of warehouse Routes
 
Route::get('/checkin/unlist/{rcid}', [CheckinController::class, 'unlist'])->name('checkinunlist'); 
Route::get('/checkin/list', [CheckinController::class, 'list'])->name('checkinlist'); 
Route::resource('checkin',CheckinController::class);
// End of warehouse Routes

// Start of warehouse Routes 
Route::resource('warehouse',WarehouseController::class);
// End of warehouse Routes

// Start of warehouse Routes 
Route::resource('role',RoleController::class);
// End of warehouse Routes
 
// Start of warehouse Routes
Route::post('rack/assignbarcode', [RackController::class, 'assignbarcode'])->name('assignbarcode');
Route::get('rack/label/{rack}', [RackController::class, 'printlabel'])->name('racklabel');
Route::get('rack/manage/{warehouse}', [RackController::class, 'managerack'])->name('managerack');
Route::resource('rack',RackController::class);
// End of warehouse Routes
 
// start of report
Route::get('report/closure', [ReportController::class, 'closureview'])->name('closureview');
Route::get('report/reorder', [ReportController::class, 'reorderview'])->name('reorderview');



Route::get('report/stock-in', [ReportController::class, 'stockinview'])->name('stockinview');
Route::post('report/gen_stock-in', [ReportController::class, 'gen_stockin'])->name('gen_stockin');
Route::post('report/gen_stock-in-excel', [ReportController::class, 'gen_excel'])->name('gen_stockin_excel');
Route::post('report/gen_stock-in-pdf', [ReportController::class, 'gen_pdf'])->name('gen_stockin_pdf');

Route::post('report/excel_export', [ReportController::class, 'exportexcel'])->name('excel_report');

Route::get('report/inventory', [ReportController::class, 'inventoryview'])->name('inventory_report');
Route::post('report/gen_inventory', [ReportController::class, 'gen_inventory'])->name('gen_inventory');
Route::post('report/gen_inventory-excel', [ReportController::class, 'gen_inventory_excel'])->name('gen_inventory_excel');
Route::post('report/gen_inventory-pdf', [ReportController::class, 'gen_inventory_pdf'])->name('gen_inventory_pdf');

Route::get('report/stock-out', [ReportController::class, 'stockoutview'])->name('stockout_report');
Route::post('report/gen_stock-out', [ReportController::class, 'gen_stockout'])->name('gen_stockout');
Route::post('report/gen_stock-out-excel', [ReportController::class, 'gen_stockout_excel'])->name('gen_stockout_excel');
Route::post('report/gen_stock-out-pdf', [ReportController::class, 'gen_stockout_pdf'])->name('gen_stockout_pdf');

Route::get('report/transfer', [ReportController::class, 'transferview'])->name('transfer_report');
Route::post('report/gen_transfer', [ReportController::class, 'gen_transfer'])->name('report_gen_transfer');


Route::get('report/checkin', [ReportController::class, 'checkinview'])->name('checkin_report');
Route::get('report/recieved', [ReportController::class, 'reportview'])->name('rec_report');
Route::post('report/gen_recieved', [ReportController::class, 'gen_recieved'])->name('gen_recieved');
Route::post('report/gen_checkin', [ReportController::class, 'gen_checkin'])->name('gen_checkin');
Route::post('report/gen_inventory', [ReportController::class, 'gen_inventory'])->name('gen_inventory');

// end of report
// Start of Product Routes  deleterecieved

Route::get('/mastercases/changemc/{id}', [MasterController::class, 'changemc'])->name('changemc');
Route::get('/mastercases/deleterecieved/{id}', [MasterController::class, 'deleterecieved'])->name('deleterecieved');
Route::get('/mastercases/viewrecieved/{id}', [MasterController::class, 'viewreceived'])->name('viewreceived');
Route::get('/mastercases/palletlabel/{rcid}/{count}/{mcid}', [MasterController::class, 'palletlabel'])->name('palletlabel');
Route::post('/mastercases/updatereceived', [MasterController::class, 'updatereceived'])->name('updatereceived');
Route::get('/mastercases/editrecieved/{id}', [MasterController::class, 'editreceived'])->name('editreceived');
Route::post('/mastercases/getmc', [MasterController::class, 'getmc'])->name('getmc');
Route::post('/mastercases/getmcdq', [MasterController::class, 'getmcdq'])->name('getmcdq');
Route::post('/mastercases/getmcd', [MasterController::class, 'getmcd'])->name('getmcd');
Route::get('/mastercases/label/{id}', [MasterController::class, 'label'])->name('label');
Route::post('/mastercases/savereceived', [MasterController::class, 'savereceived'])->name('savereceived');
Route::get('/mastercases/receivedlist', [MasterController::class, 'receivedlist'])->name('receivedlist');
Route::get('/mastercases/received', [MasterController::class, 'received'])->name('received');
Route::get('/mastercases/newreceived', [MasterController::class, 'newreceived'])->name('newreceived'); 
Route::resource('mastercase',MasterController::class);
// End of Product Routes
//start of PDF Controller
Route::get('/binlabel/{id}', [PdfController::class, 'binlabel'])->name('binlabels');
Route::get('/palletlabel/{rcid}/{count}/{mcid}', [PdfController::class, 'palletlabel'])->name('palletlabels');
Route::get('/mclabel/{id}', [PdfController::class, 'mclabel'])->name('mclabel');
// End of PDF Controller

// start of Transfer
Route::get('transfer/placed', [TransferController::class, 'placedtransfer'])->name('placedtransfer');
Route::get('transfer/picked', [TransferController::class, 'pickedtransfer'])->name('pickedtransfer');
Route::get('transfer/view/{id}', [TransferController::class, 'view'])->name('transfer_view');
Route::post('transfer/gen_transfer', [TransferController::class, 'gen_transfer'])->name('gen_transfer'); 
Route::resource('transfer',TransferController::class);
// End of Transfer


// start of CycleCount
Route::get('cyclecount/pending', [CycleCountController::class, 'pendingcyclecount'])->name('pendingcyclecount');
Route::get('cyclecount/completed', [CycleCountController::class, 'completedcyclecount'])->name('completedcyclecount');
Route::get('/updateBin/{id}', [CycleCountController::class, 'update'])->name('cyclecount.update.bin');

Route::resource('cyclecount',CyclecountController::class);
// End of Cycle Count 

Route::get('/batch/pending', [BatchController::class, 'pending'])->name('pending');
Route::get('/batch/confirmed', [BatchController::class, 'confirmed'])->name('confirmed');
Route::get('/batch/verified', [BatchController::class, 'verified'])->name('verified');
Route::get('/confirm/{id}', [BatchController::class, 'confirmbatch'])->name('confirmbatch');
Route::post('/upload-doc', [BatchController::class, 'upload_paid_doc'])->name('upload-doc');
Route::resource('batch',BatchController::class);
Route::resource('document',DocumentController::class);
// start of pdf controller 
    Route::get('/printchallan/{id}', [PdfController::class, 'printchallan'])->name('printchallan');
    Route::get('/printbatch/{id}', [PdfController::class, 'printbatch'])->name('printbatch');
    Route::get('/printreport/{id}', [PdfController::class, 'printreport'])->name('printreport');
    Route::get('/printdoc/{id}', [PdfController::class, 'printdoc'])->name('printdoc');
// end of pdf controller

//Start of Pick Order Routes
Route::post('/pick/import', [PickorderController::class, 'importproduct'])->name('pick_import');
Route::get('pick/confirmed/transaction/{id}', [PickorderController::class, 'pickdonelist'])->name('pickdonelist');
Route::get('pick/confirmed', [PickorderController::class, 'pickdone'])->name('pickdone');
Route::post('pick/pickorder', [PickorderController::class, 'pickorder'])->name('pickorder');
Route::resource('pick',PickorderController::class);
// End of Pick Order Routes

// start of employee panel

Route::prefix('employee')->group(function () {
    // Employee Login Routes
    Route::get('login', [EmployeeAuthController::class, 'showLoginForm'])->name('employee.login');
   // Route::post('login', 'EmployeeAuthController@login')->name('employee.login.submit');
    //Route::post('logout', 'EmployeeAuthController@logout')->name('employee.logout');

    // Employee Registration Routes
   // Route::get('register', 'EmployeeAuthController@showRegistrationForm')->name('employee.register');
    //Route::post('register', 'EmployeeAuthController@register')->name('employee.register.submit');
});


// protected route for employee
Route::middleware('employee.auth')->group(function () {
    // Employee dashboard or other protected routes
    Route::get('dashboard', [PdfController::class, 'printchallan'])->name('employee.dashboard');
    // ...
});









