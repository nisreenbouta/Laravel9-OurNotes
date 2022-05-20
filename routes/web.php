<?php

use App\Http\Controllers\AdminPanel\AdminContentcontroller;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\Imagecontroller;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\Categorycontroller as AdminCategoryController;
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

//1-do something in route
Route::get('/hello', function () {
    return 'Hello World';
});

//2- call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

//**************HOME PAGE ROUTES**************
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');

//4- route->controller->view
Route::get('/test', [HomeController::class, 'test'])->name('test');

//5- route with parameters
Route::get('/param/{id}/{number}',[HomeController::class, 'param'])->name('param');

//6- route with post
Route::post('/save',[HomeController::class, 'save'])->name('save');

Route::get('/content/{id}/',[HomeController::class, 'content'])->name('content');
Route::get('/categorycontent/{id}/{slug}',[HomeController::class, 'categorycontent'])->name('categorycontent');



Route::get('/index', 'HomeController@index')->name('index');

Route::middleware([

    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//**************ADMIN PANEL ROUTES**************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');


    //**************GENERAL  ROUTES**************
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

    //**************ADMIN CATEGORY ROUTES**************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
        });

    //**************ADMIN CONTENT ROUTES**************
    Route::prefix('/content')->name('content.')->controller(AdminContentcontroller::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });


    //**************ADMIN CONTENT IMAGE GALLERY ROUTES**************
    Route::prefix('/image')->name('image.')->controller(Imagecontroller::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');

    });

    //**************ADMIN MESSAGE ROUTES**************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');

        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });
    //**************ADMIN FAQ ROUTES**************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
});

