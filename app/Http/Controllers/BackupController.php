<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Auth;

class BackupController extends Controller
{
    public function downloadSqlBackup(){

     if(Auth::user()->role != 1){
        return redirect()->back()->with('message' , 'Unauthenticated Access!');
     }

     Artisan::call('backup:run');
     $output = Artisan::output();
    //$errorOutput = Artisan::error();

    //dd($output);
     $path = storage_path('app/*');
     $latest_ctime = 0;
     $latest_filename = '';
     $files = glob($path);
     foreach($files as $file)
     {
             if (is_file($file) && filectime($file) > $latest_ctime)
             {
                     $latest_ctime = filectime($file);
                     $latest_filename = $file;
             }
     }
     return response()->download($latest_filename);

}
}
