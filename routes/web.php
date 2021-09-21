<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class.'index']);

Route::prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika',[ProdiController::class , 'mi']);
    Route::get('/teknik-informatika',[ProdiController::class, 'ti']);
});

Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran',[SaranaController:: class ,'perkantoran']);
    Route::get('/labotarium',[SaranaController:: class , 'labotarium']);
    Route::get('/kelas',[SaranaController:: class , 'kelas']);
    Route::get('/lainnya',[SaranaController:: class , 'lainnya']);
});

Route::get('/about', [AboutController::class.'about']);

Route::get('/comment/{nama}/pesan/{pesan}', [CommentController::class.'comment']);

Route::get('/', function(){
    return views('welcome');
});
Route::get('/home', function(){
    return views('home.blade.php');
});
Route::get('/prduct', function(){
    return views('product.blade.php');
});
Route::get('/news', function(){
    return views('news.blade.php');
});
Route::get('/program', function(){
    return views('program.blade.php');
});
Route::get('/about-us', function(){
    return views('about-us.blade.php');
});
Route::get('/contact-us', function(){
    return views('contact-us.blade.php');
});
Auth::routes();
