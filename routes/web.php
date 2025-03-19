<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('expenses', ExpenseController::class);
Route::resource('categories', CategoryController::class);

// Route::get('/expenses', ExpenseController::class, 'index')->name('expense.index');
// Route::get('/expenses/create', ExpenseController::class, 'create')->name('expense.create');
// Route::post('/expenses/store', ExpenseController::class, 'store')->name('expense.store');
// Route::get('/expenses/show', ExpenseController::class, 'show')->name('expense.show');
// Route::get('/expenses/edit', ExpenseController::class, 'edit')->name('expense.edit');
// Route::post('/expenses/update', ExpenseController::class, 'update')->name('expense.update');
// Route::post('/expenses/destroy', ExpenseController::class, 'destroy')->name('expense.destroy');

// Route::get('/categories', CategoryController::class, 'index')->name('category.index');
// Route::get('/categories/create', CategoryController::class, 'create')->name('category.create');
// Route::post('/categories/store', CategoryController::class, 'store')->name('category.store');
// Route::get('/categories/show', CategoryController::class, 'show')->name('category.show');
// Route::get('/categories/edit', CategoryController::class, 'edit')->name('category.edit');
// Route::post('/categories/update', CategoryController::class, 'update')->name('category.update');
// Route::post('/categories/destroy', CategoryController::class, 'destroy')->name('category.destroy');
