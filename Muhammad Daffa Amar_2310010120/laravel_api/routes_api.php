
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DisasterController;

Route::apiResource('disasters', DisasterController::class);
