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
use \App\Http\Controllers as app;

Route::get('/', [app\ResultController::class, 'stats']);
// function () {
//     return view('welcome');
// });

/*********************************************************************************************
 * Quiz
 *********************************************************************************************/
Route::get('/quizzes', [app\QuizController::class, 'index']);
Route::get('/quiz/{quiz}', [app\QuizController::class, 'show']);
Route::get('/quiz/{id}/questions', [app\QuizController::class, 'questions']);
Route::get('/quiz/{id}/start', [app\QuizController::class, 'start']);
Route::post('/quiz/save', [app\ResultController::class, 'store'])->name('quiz.save');
Route::post('/stats', [app\ResultController::class, 'stats']);
/*********************************************************************************************
 * Question
 *********************************************************************************************/
Route::get('/questions/{quizid}', [app\QuestionController::class, 'index']);
Route::get('/question/{question}', [app\QuestionController::class, 'show']);
Route::get('/question/{id}/options', [app\QuestionController::class, 'options']);


/**********************************************************************************************
 * QuizOption
 **********************************************************************************************/

/***********************************************
 * Retreiving options for the provided question
 */
Route::get('/options/{id}', [app\QuizzesOptionController::class, 'index']);

/***********************************************
 * Retreiving selected option 
 */
Route::get('/option/{quizOption}', [app\QuizzesOptionController::class, 'show']);


/*********************************************************************************************
 * Results
 *********************************************************************************************/
Route::get('/results/{id}', [app\ResultController::class, 'index']);

 

/*********************************************************************************************
 * Users
 *********************************************************************************************/
/***************************************************
 * Retriving Users
 */
Route::get('/users', [app\UserController::class, 'index']);

Route::get('/user/{user}', [app\UserController::class, 'show']);

/******************************************************************************************
 * 404
 */
