<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::view("/", 'index');


//Clients


Route::get("/clients", [ClientController::class, 'index'])->name('clients_index');
Route::post("/clients", [ClientController::class, 'store']);
Route::get("/client/create", [ClientController::class, 'create']);
Route::get("/client/{client}", [ClientController::class, 'show']);
Route::get("/client/{client}/edit", [ClientController::class, 'edit']);
Route::patch("/client/{client}/update", [ClientController::class, 'update']);
Route::delete("/client/{client}/destroy", [ClientController::class, 'destroy']);
