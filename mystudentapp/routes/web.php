<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddcoursesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\myCourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\STDcourseController;
use App\Models\mycourse;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ProfileController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//post
Route::post('/post/store', [PostController::class, 'store'])->name('posts.store');


//course
Route::get('/course', [CourseController::class, 'course'])->name('Addcourse.course');           //view course page
Route::post('/course/store', [CourseController::class, 'store'])->name('Addcourse.store');      //course form insert data
Route::get('/course/courses', [CourseController::class, 'allcourse'])->name('course.all');      //all courses 
Route::get('/course/edit/{id}', [CourseController::class, 'Edit'])->name('course.edit');        //open edit page
Route::get('/course/edit/{id}', [CourseController::class, 'Edits'])->name('course.edit');       //update data calling
Route::post('/course/edit/{id}', [CourseController::class, 'update'])->name('course.update');   //update button
Route::get('/course/courses/{id}', [CourseController::class, 'delete'])->name('course.delete'); //delete data



//STDcourse
Route::get('/STDcourse', [STDcourseController::class, 'stdcourse'])->name('STDcourse.STDcourse');
Route::post('/STDcourse', [STDcourseController::class, 'student'])->name('STDcourse.student');


//About
Route::get('/About', [AboutController::class, 'about'])->name('About.about');


//back home
Route::get('/', [ProfileController::class, 'index'])->name('welcome');
