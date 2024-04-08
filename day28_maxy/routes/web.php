<?php

use App\Http\Controllers\CitizenController;
use App\Http\Controllers\SpreadsheetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('citizen', [
        'data' => CitizenController::showCitizen()
    ]);
});

Route::post('/insert', [CitizenController::class, 'createCitizen']);

Route::get('/delete/{id}', function($id){
    CitizenController::destroyCitizen($id);
    return view('citizen', [
        'data' => CitizenController::showCitizen(),
        'alert' => 'Successfully removed a citizen data!'
    ]);
});

Route::get('/download/csv', [SpreadsheetController::class, 'downloadCSV']);

Route::get('/download/xlsx', [SpreadsheetController::class, 'downloadXLSX']);
