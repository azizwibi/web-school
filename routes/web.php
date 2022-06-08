<?php



use App\models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DhasboardPostController;

use App\Models\category;
use App\Models\user;


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
    return view('home', [
        "title" => "home"

    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" =>"about",
        "name" =>"aziz wibisono",
        "email" =>"azizwibisono@gmail.com",
        "image" =>"aziz.jpg"

    ]);
});


Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post:slug}',[PostController::class,'show']);

Route::get('categories', function() {
    return view('categories',[
        'title'=>'post categories',
        'categories' => category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

// Route::get('/categories/{category:slug}',[PostController::class,'categorys']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dhasboard', function() {return view ('dhasboard.index');})->middleware('auth');

Route::get('/dhasboard/posts/cekSlug', [ DhasboardPostController::class,'cekSlug'])->middleware('auth');
Route::resource('/dhasboard/posts',DhasboardPostController::class)->middleware('auth');



