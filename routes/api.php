<?php

use App\Models\Car;
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
//get útvonal amelyben visszaadjuk az összes autót
Route::get('/car', function (){
    return Car::all();
});
//post végpont,ami egy kérést is tartalmaz az szerver felé és create paranccsal létrehozunk egy új autót és egy tömbben átadjuk az értékeit.
Route::post('/car', function(Request $request){
    $car = Car::create([
        "license_plate_number" => $request->license_plate_number,
        "brand"=> $request->brand,
        "model"=> $request->model,
        "year_of_manufacture"=> $request->year_of_manufacture,
        "fuel_type"=> $request->fuel_type,
    ]);
    //a post végponton vissza kell adni az autot amit létrehoztunk
    return $car;
});