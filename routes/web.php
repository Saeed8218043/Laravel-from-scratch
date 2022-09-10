<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\sessionsController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\services\MailchimpNewsLetter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Facade;
use Illuminate\Validation\ValidationException;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use MailchimpMarketing\ApiClient;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

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



Route::get('/', [PostController::class, 'index']);

Route:: get('articles/{post:slug}', [PostController::class, 'show']);
Route:: post('articles/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsLetterController::class);

Route:: get('register', [RegisterController::class, 'create'])->middleware('guest');
Route:: post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [sessionsController::class, 'create'])->middleware('guest');
Route::post('login', [sessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [sessionsController::class, 'destroy'])->middleware('auth');

Route::get('admin/posts/create',[AdminPostController::class,'create'])->middleware('admin');
Route::get('admin/posts',[AdminPostController::class,'index'])->middleware('admin');

Route::get('admin/posts/{post}/edit',[AdminPostController::class,'edit'])->middleware('admin');

Route::post('admin/posts',[AdminPostController::class,'store'])->middleware('admin');
Route::patch('admin/posts/{post}',[AdminPostController::class,'update'])->middleware('admin');
Route::delete('admin/posts/{post}',[AdminPostController::class,'destroy'])->middleware('admin');
