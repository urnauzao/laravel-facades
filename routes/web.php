<?php

use App\Facades\MyBestLogger;
use App\Facades\MyLogger;
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
    \MyLogger::error('my logger error', [1,2], 'ERROR17');
    MyLogger::critical('my logger critical', [1,2, 8123761862, "asdas"], 'CRITICAL18');
    MyBestLogger::error('my best error logger', [213,1223, 51521], 'YUASH12');
    \mybestlogger::critical('my best logger', [213,1223, 51521], 'YUASH12');
    mybestlogger::critical('my best logger', [213,1223, 51521], 'YUASH12');
    return response()->json(["sucesso" => true]);
});
