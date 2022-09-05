<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
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

//Frontend Controller
Route::get('/', [FrontendController::class, 'index']);
Route::get('/blog/details{id}/{title}', [FrontendController::class, 'details']);
Route::post('/comment/store', [FrontendController::class, 'storeComment']);

//Admin Controller
Route::get('/admin/login', [AdminController::class, 'showAdminLoginForm']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('admin/logout', [AdminController::class, 'adminLogout']);

    //Category Controller
    Route::get('/add/category', [CategoryController::class, 'addCategoryForm']);
    Route::post('/category/store', [CategoryController::class, 'categoryStore']);
    Route::get('/manage/category', [CategoryController::class, 'manageCategory']);
    Route::get('/edit/category/{id}', [CategoryController::class, 'editCategoryForm']);
    Route::post('/category/update/{id}', [CategoryController::class, 'updateCategory']);
    Route::get('/delete/category/{id}', [CategoryController::class, 'deleteCategory']);

    //Post Controller
    Route::get('/add/post', [PostController::class, 'AddPostForm']);
    Route::post('/post/store', [PostController::class, 'postStore']);
    Route::get('/manage/post', [PostController::class, 'managePost']);
    Route::get('/edit/post/{id}', [PostController::class, 'editPostForm']);
    Route::post('/post/update/{id}', [PostController::class, 'updatePost']);
    Route::get('/delete/post/{id}', [PostController::class, 'deletePost']);
    
    
});

