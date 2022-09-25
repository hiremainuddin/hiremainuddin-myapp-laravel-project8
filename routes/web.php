<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
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

// Frontend
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('/');
Route::get('/blog-detail/{id}', [App\Http\Controllers\FrontendController::class, 'detail'])->name('blog-detail');

Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

// Contact form submit
Route::post('store-message', [App\Http\Controllers\MessageController::class, 'store'])->name('store-message');
// form succes msg
Route::get('download', [App\Http\Controllers\FrontendController::class, 'download'])->name('download');
Auth::routes(['register' => false]);
// projects routes
Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
	Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
	Route::get('/add-project', [App\Http\Controllers\ProjectController::class, 'create'])->name('add-project');
	Route::post('/store', [App\Http\Controllers\ProjectController::class, 'store'])->name('project.store');
	Route::get('/edit/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('edit');
	Route::post('/update/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('update');
	Route::get('/project-delete/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('project-delete');

	// client
	Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])
	->name('client');
	Route::post('/client-data', [App\Http\Controllers\ClientController::class, 'store'])
	->name('client-data');
	Route::post('/update-client-data/{id}', [App\Http\Controllers\ClientController::class, 
	'update'])->name('update-client-data');
	Route::get('/delete/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])
	->name('delete');

	// Reviews routes
	Route::get('/reviews', [App\Http\Controllers\ReviewsController::class, 'index'])->name('reviews');
	Route::get('/create-review', [App\Http\Controllers\ReviewsController::class, 'create'])->name('create-review');
	Route::post('/store-review', [App\Http\Controllers\ReviewsController::class, 'store'])->name('store-review');
	Route::get('/edit-review/{id}', [App\Http\Controllers\ReviewsController::class, 'edit'])->name('edit-review');
	Route::post('/update-review/{id}', [App\Http\Controllers\ReviewsController::class, 'update'])->name('update-review');
	Route::get('/delete-review/{id}', [App\Http\Controllers\ReviewsController::class, 'destroy'])->name('delete-review');
	// blogs
	Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
	Route::post('/blog/create', [App\Http\Controllers\BlogController::class, 'store'])->name('blog/create');
	Route::post('/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog/update');
	Route::get('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog/delete');

	// Messages
	Route::get('/messages', [App\Http\Controllers\MessageController::class,'index'])->name('messages');
	Route::get('/delete-message/{id}', [App\Http\Controllers\MessageController::class,'destroy'])->name('delete-message');
Route::get('/delete-all-msg', [App\Http\Controllers\MessageController::class,'deleteAllmsg'])->name('delete-all-msg');
	// service
	Route::get('/services', [App\Http\Controllers\ServicController::class,'index'])->name('services');

	Route::post('/service-store', [App\Http\Controllers\ServicController::class,'store'])->name('service-store');
	Route::get('/delete-service', [App\Http\Controllers\ServicController::class,'destroy'])->name('delete-service');
	Route::post('/update-services/{id}', [App\Http\Controllers\ServicController::class,'update'])->name('update-services');

	// profile routes
	Route::get('/profile', [App\Http\Controllers\ProfileController::class,'index'])->name('profile');
	Route::post('/profile-update/{id}', [App\Http\Controllers\ProfileController::class,'update'])
	->name('profile-update');

});
