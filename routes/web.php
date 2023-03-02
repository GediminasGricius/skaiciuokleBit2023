<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\SkaiciuokleController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





//Route::middleware(['auth'])->group(function (){
    Route::get('/forma', [SkaiciuokleController::class, 'forma'] )->name("forma");
    Route::post('/rezultatas', [SkaiciuokleController::class, 'rezultatas'])->name("rezultatas");

    Route::get('/', [GroupController::class,'groups'])->name("groups.list");

    Route::get('/groups/create', [GroupController::class,'create'])->name("groups.create")->middleware('suaugusiems');
    Route::post('/groups/store', [GroupController::class,'store'])->name("groups.store");
    Route::get('/groups/{id}/update', [GroupController::class,'update'])->name("groups.update");
    Route::post('/groups/{id}/save', [GroupController::class,'save'])->name('groups.save');
    Route::get('/groups/{id}/delete',[GroupController::class, 'delete'])->name('groups.delete');
    Route::post('/groups/search', [GroupController::class,'search'])->name('groups.search');
    Route::resource('students', StudentController::class)->except(['index'])->middleware('suaugusiems');;
    Route::get('/students',[ StudentController::class,'index'])->name('students.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//});




Auth::routes();

