<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('gopi', function () {
    echo "Ok Bro this is Currect";
});
Route::get('/pin', function () {
    return view('pincode.index');
});
Route::post('/pincode', [StudentController::class, 'pincodeCheck']);
Route::get('/pincode', function () {
    return redirect('pin');
});
Route::get('/json', [StudentController::class, 'json']);