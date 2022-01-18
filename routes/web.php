<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Days\FridayController;
use App\Http\Controllers\Admin\Days\MondayController;
use App\Http\Controllers\Admin\Days\SaturdayController;
use App\Http\Controllers\Admin\Days\SundayController;
use App\Http\Controllers\Admin\Days\ThursdayController;
use App\Http\Controllers\Admin\Days\TuesdayController;
use App\Http\Controllers\Admin\Days\WednesdayController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\PagesController;
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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');


Route::get('/about',[PagesController::class, 'about'])->name('frontend.about');
Route::get('/contact-us',[PagesController::class, 'contactUs'])->name('frontend.contactus');
Route::get('/scheduler',[PagesController::class, 'scheduler'])->name('frontend.scheduler');
Route::get('/home/team',[PagesController::class, 'team'])->name('frontend.team');
Route::get('home/blog/list', [BlogController::class, 'blogList'])->name('blog.list');
Route::get('home/blog/single', [BlogController::class, 'singleBlog'])->name('single.blog');
Route::get('/search', [BlogController::class, 'index'])->name('search');



Route::get('/dashboard',  [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/login',  [AdminController::class, 'getLogin'])->name('admin.get.login');
Route::post('/post/login',  [AdminController::class, 'postLogin'])->name('admin.post.login');

Route::resource('team', TeamController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('monday', MondayController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('tuesday', TuesdayController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('wednesday', WednesdayController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('thursday', ThursdayController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('friday', FridayController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('saturday', SaturdayController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('sunday', SundayController::class)->only(['index','store','show','update','destroy','edit','create'  ]);


Route::resource('tag', TagController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('category', CategoryController::class)->only(['index','store','show','update','destroy','edit','create'  ]);

Route::resource('post', PostController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('users', UsersController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('roles', RolesController::class)->only(['index','store','show','update','destroy','edit','create'  ]);

