<?php

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




Route::post('/userscheduals/store',[\App\Http\Controllers\UserSchedualsController::class,'store']);
Route::get('/userscheduals/{userscheduals}/show',[\App\Http\Controllers\UserSchedualsController::class,'show']);
Route::put('/userscheduals/{userscheduals}/update',[\App\Http\Controllers\UserSchedualsController::class,'update']);
Route::delete('/userscheduals/{userscheduals}/delete',[\App\Http\Controllers\UserSchedualsController::class,'delete']);




Route::post('/taskquestions/store',[\App\Http\Controllers\TaskquestionsController::class,'store']);
Route::get('/taskquestions/{taskquestions}/show',[\App\Http\Controllers\TaskquestionsController::class,'show']);
Route::put('/taskquestion/{taskquestions}/update',[\App\Http\Controllers\TaskquestionsController::class,'update']);
Route::delete('/taskquestions/{taskquestions}/delete',[\App\Http\Controllers\TaskquestionsController::class,'delete']);


Route::post('/taskers/store',[\App\Http\Controllers\TaskersController::class,'store']);
Route::get('/taskers/{taskers}/show',[\App\Http\Controllers\TaskersController::class,'show']);
Route::put('/taskers/{taskers}/update',[\App\Http\Controllers\TaskersController::class,'update']);
Route::delete('/tasekrs/{taskers}/delete',[\App\Http\Controllers\TaskersController::class,'delete']);


Route::post('/taskerprofile/store',[\App\Http\Controllers\TaskerprofileController::class,'store']);
Route::get('/taskerprofile/{taskerprofile}/show',[\App\Http\Controllers\TaskerprofileController::class,'show']);
Route::put('/taskerprofile/{taskerprofile}/update',[\App\Http\Controllers\TaskerprofileController::class,'update']);
Route::delete('/taskerprofile/{taskerprofile}/delete',[\App\Http\Controllers\TaskerprofileController::class,'delete']);


Route::post('/sortreview/store',[\App\Http\Controllers\SortReviewsController::class,'store']);
Route::get('/sortreview/{sortreview}/show',[\App\Http\Controllers\SortReviewsController::class,'show']);
Route::put('/sortreview/{sortreview}/update',[\App\Http\Controllers\SortReviewsController::class,'update']);
Route::delete('/sortreview/{sortreview}/delete',[\App\Http\Controllers\SortReviewsController::class,'delete']);


Route::post('/promot/store',[\App\Http\Controllers\PromotController::class,'store']);
Route::get('/promot/{promot}/show',[\App\Http\Controllers\PromotController::class,'show']);
Route::put('/promot/{promot}/update',[\App\Http\Controllers\PromotController::class,'update']);
Route::delete('/promot/{promot}/delete',[\App\Http\Controllers\PromotController::class,'delete']);


Route::post('/pasttasks/store',[\App\Http\Controllers\PastTasksController::class,'store']);
Route::get('/pasttasks/{pasttasks}/show',[\App\Http\Controllers\PastTasksController::class,'show']);
Route::put('/pasttasks/{pasttasks}/update',[\App\Http\Controllers\PastTasksController::class,'update']);
Route::delete('/pasttasks/{pasttasks}/delete',[\App\Http\Controllers\PastTasksController::class,'delete']);


Route::post('/loginandsignup/store',[\App\Http\Controllers\LoginandsignupController::class,'store']);
Route::get('/loginandsignup/{loginandsignup}/show',[\App\Http\Controllers\LoginandsignupController::class,'show']);
Route::put('/loginandsignup/{loginandsignup}/update',[\App\Http\Controllers\LoginandsignupController::class,'update']);
Route::delete('/loginandsignup/{loginandsignup}/delete',[\App\Http\Controllers\LoginandsignupController::class,'delete']);

Route::get('/location/index',[\App\Http\Controllers\LocationController::class,'index']);
Route::post('/location/store',[\App\Http\Controllers\LocationController::class,'store']);
Route::get('/location/{location}/show',[\App\Http\Controllers\LocationController::class,'show']);
Route::put('/location/{location}/update',[\App\Http\Controllers\LocationController::class,'update']);
Route::delete('/location/{location}/delete',[\App\Http\Controllers\LocationController::class,'delete']);



Route::post('/finalprice/store',[\App\Http\Controllers\FinalPriceController::class,'store']);
Route::get('/finalprice/{finalprice}/show',[\App\Http\Controllers\FinalPriceController::class,'show']);
Route::put('/finalprice/{finalprice}/update',[\App\Http\Controllers\FinalPriceController::class,'update']);
Route::delete('/finalprice/{finalprice}/delete',[\App\Http\Controllers\FinalPriceController::class,'delete']);

Route::post('/categories/store',[\App\Http\Controllers\CategoriesController::class,'store']);
Route::get('/categories/{categories}/show',[\App\Http\Controllers\CategoriesController::class,'show']);
Route::put('/categories/{categories}/update',[\App\Http\Controllers\CategoriesController::class,'update']);
Route::delete('/categories/{categories}/delete',[\App\Http\Controllers\CategoriesController::class,'delete']);
Route::prefix('userprofile')->group(function (){
        Route::middleware('auth:sanctum')->group(function () {
            Route::get('/', [\App\Http\Controllers\UserProfileController::class, 'index']);
            Route::post('/store', [\App\Http\Controllers\UserProfileController::class, 'store']);
            Route::get('/{userprofile}/show', [\App\Http\Controllers\UserProfileController::class, 'show']);
            Route::put('/{userprofile}/update', [\App\Http\Controllers\UserProfileController::class, 'update']);
            Route::delete('/{userprofile}/delete', [\App\Http\Controllers\UserProfileController::class, 'delete']);
        });
});
Route::post('/bookingdb/store',[\App\Http\Controllers\BookingdbController::class,'store']);
Route::get('/bookingdb/{bookingdb}/show',[\App\Http\Controllers\BookingdbController::class,'show']);
Route::put('/bookingdb/{bookingdb}/update',[\App\Http\Controllers\BookingdbController::class,'update']);
Route::delete('/bookingdb/{bookingdb}/delete',[\App\Http\Controllers\BookingdbController::class,'delete']);


Route::get('userprofile/{userprofile}/token',[\App\Http\Controllers\UserProfileController::class,'createtoken']);


