<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::view("/", 'index');


//Clients
Route::get("/client/create", [ClientController::class, 'create']);
Route::get("/clients", [ClientController::class, 'index']);
Route::get("/client/{client}", [ClientController::class, 'show']);

