<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VotingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/adminpemira', [AdminController::class, 'index']);
Route::get('/adminpemira/delete/{id}', [AdminController::class, 'dptdelete']);
Route::get('/adminpemira/delete/all', [AdminController::class, 'deleteall']);
Route::get('/pemirauser', [AdminController::class, 'pemiluser']);

//data jurusan
Route::get('/adminpemira/datajurusan', [AdminController::class, 'datajurusan']);
Route::get('/datajurusan/post', [AdminController::class, 'adddatajurusan']);
Route::get('/datajurusan/del/{id}', [AdminController::class, 'deldatajurusan']);

//data calon
Route::get('/adminpemira/datacalon', [AdminController::class, 'datacalon']);
Route::post('/datacalon/post', [AdminController::class, 'adddatacalon']);
Route::get('/datacalon/del/{id}', [AdminController::class, 'deldatacalon']);
Route::get('/datacalon/edit/{id}', [AdminController::class, 'editdatacalon']);
Route::post('/datacalon/edit/post/{id}', [AdminController::class, 'postdatacalon']);

//data dpt
Route::get('/adminpemira/datadpt', [AdminController::class, 'datadpt']);
Route::post('/datadpt/post', [AdminController::class, 'adddatadpt']);

//hasil vote
Route::get('/adminpemira/hasilvote', [AdminController::class, 'hasilvote']);
// Route::get('/pemilsos/hasilvote', [AdminController::class, 'countdpt']);

//daftar hadir
Route::get('/adminpemira/daftarhadir', [AdminController::class, 'daftarhadir']);

//vote
Route::get('/pemirauser/vote/{id}', [VotingController::class, 'vote']);
Route::get('/pemirauser/gagal', [AdminController::class, 'gagal']);
Route::get('/pemirauser/succes', [AdminController::class, 'success']);
