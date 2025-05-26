<?php

use App\Http\Controllers\BoardController;

Route::get('/taskManagement/Board', [BoardController::class, 'showboard'])->name('taskManagement.Board.form');
Route::post('/taskManagement/Board', [BoardController::class, 'Board'])->name('taskManagement.Board');
Route::get('/taskManagement/Board', [BoardController::class, 'showboard']);


use App\Http\Controllers\MemberController;

Route::get('/taskManagement/Member', [MemberController::class, 'showmember'])->name('taskManagement.Member.form');
Route::post('/taskManagement/Member', [MemberController::class, 'Member'])->name('taskManagement.Member');
Route::get('/members', [MemberController::class, 'showmember'])->name('taskManagement.Member');
Route::get('/members/search', [MemberController::class, 'search']);


use App\Http\Controllers\HistoryController;

Route::get('/taskManagement/History', [HistoryController::class, 'index'])->name('taskManagement.History.form');
Route::post('/taskManagement/History', [HistoryController::class, 'store'])->name('taskManagement.History');
Route::post('/history', [HistoryController::class, 'store'])->name('history.store');

use App\Http\Controllers\ArchiveController;

Route::get('/taskManagement/Archive', [ArchiveController::class, 'index'])->name('taskManagement.Archive');
Route::post('/taskManagement/Archive', [ArchiveController::class, 'archive']);






