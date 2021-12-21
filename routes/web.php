<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#FrontEnd
// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/', [NewsController::class, 'frontend_index'])->name('frontend_index');

# BackEnd
Route::group(['prefix' =>'dashboard', 'middleware' => 'auth'], function() {
Route::get('/', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('dashboard/news', [NewsController::class, 'backend_index'])->name('backend_index');
Route::get('/tambahinfo/news', [NewsController::class, 'tambahinfo'])->name('tambahinfo_news');
Route::post('/form/news', [NewsController::class, 'store'])->name('form_news');

#Edit dan Update
Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit_news');
Route::put('/update/{id}', [NewsController::class, 'update'])->name('update_news');

#Delete
Route::delete('/delete/{id}', [NewsController::class, 'delete'])->name('delete_news');
//Route::get('/info', [InfoController::class, 'backend'])->name('backend_info');
});

Route::get('/list', [NewsController::class, 'list'])->name('list_kesehatan');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
