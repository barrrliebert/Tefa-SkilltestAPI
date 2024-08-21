
<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\CategoryController;
  
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('categories', CategoryController::class);
});

