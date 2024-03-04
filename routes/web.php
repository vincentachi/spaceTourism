<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
// use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\DestinationController;
use App\Http\Controllers\Backoffice\CrewController;
use App\Http\Controllers\Backoffice\TechnologyController;


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

// Route pour chaque page destination


Route::get('destination/{id}', [HomeController::class, 'destination'])->middleware('navlink')->name('destination');
Route::get('/planets/{id}', [HomeController::class, 'destination'])->name('planets');

// Route pour page chaque page crew

Route::get('/crew/{id}', [HomeController::class, 'crew'])->middleware('navlink')->name('crew');

// Route pour chaque page technology

Route::get('/technology/{id}', [HomeController::class, 'technology'])->middleware('navlink')->name('technology');

// Route pour le choix des langues

Route::get('/lang/{lang}', [LangController::class, 'choixLang'])->name('lang.choix');

// Route pour la page Home

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route du backOffice

//Route bakcoffice destination

Route::get('/backoffice/destination', [DestinationController::class, 'index'])->name('backoffice.destination.index');
Route::get('/backoffice/destination/create', [DestinationController::class, 'create'])->name('backoffice.destination.create');
Route::post('/backoffice/destination/store', [DestinationController::class, 'store'])->name('backoffice.destinations.store');
Route::get('/backoffice/destination/show/{id}', [DestinationController::class, 'show'])->name('backoffice.destination.show');
Route::get('/backoffice/destination/edit/{id}', [DestinationController::class, 'edit'])->name('backoffice.destination.edit');
Route::put('/backoffice/destination/update/{id}', [DestinationController::class, 'update'])->name('backoffice.destination.update');
Route::get('/backoffice/destination/delete/{id}', [DestinationController::class, 'delete'])->name('backoffice.destination.delete');
Route::delete('/backoffice/destination/destroy/{id}', [DestinationController::class, 'destroy'])->name('backoffice.destination.destroy');

//Route backoffice crew

Route::get('/backoffice/crew', [CrewController::class, 'index'])->name('backoffice.crew.index');
Route::get('/backoffice/crew/create', [CrewController::class, 'create'])->name('backoffice.crew.create');
Route::post('/backoffice/crew/store', [CrewController::class, 'store'])->name('backoffice.crews.store');
route::get('/backoffice/crew/show/{id}', [CrewController::class, 'show'])->name('backoffice.crew.show');
Route::get('backoffice/crew/edit/{id}', [CrewController::class, 'edit'])->name('backoffice.crew.edit');
Route::put('/backoffice/crew/update/{id}', [CrewController::class, 'update'])->name('backoffice.crew.update');
Route::get('/backoffice/crew/delete/{id}', [CrewController::class, 'delete'])->name('backoffice.crew.delete');
Route::delete('/backoffice/crew/destroy/{id}', [CrewController::class, 'destroy'])->name('backoffice.crew.destroy');

//Route backoffice technology

Route::get('/backoffice/technology', [TechnologyController::class, 'index'])->name('backoffice.technology.index');
Route::get('/backoffice/technology/create', [TechnologyController::class, 'create'])->name('backoffice.technology.create');
Route::post('/backoffice/technology/store', [TechnologyController::class, 'store'])->name('backoffice.technologies.store');
Route::get('/backoffice/technology/show/{id}', [TechnologyController::class, 'show'])->name('backoffice.technology.show');
Route::get('/backoffice/technology/edit/{id}', [TechnologyController::class, 'edit'])->name('backoffice.technology.edit');
Route::put('/backoffice/technology/update/{id}', [TechnologyController::class, 'update'])->name('backoffice.technology.update');
Route::get('/backoffice/technology/delete/{id}', [TechnologyController::class, 'delete'])->name('backoffice.technology.delete');
Route::delete('/backoffice/technology/destroy/{id}', [TechnologyController::class, 'destroy'])->name('backoffice.technology.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
;  