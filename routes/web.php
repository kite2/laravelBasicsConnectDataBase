<?php

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

Route::get('/' , "LibaryController@listAllBooks")->name("book.list");
Route::get('/category-list' , "LibaryController@listAllCategories")->name("category.list");
Route::get('/category-add' , "LibaryController@showFormAddCategory")->name("category.add");
Route::post('/category-add' , "LibaryController@createCategory")->name("category.create");
Route::get('/category-edit-{id}' , "LibaryController@showFormEditCategory")->name("category.edit");
Route::post('/category-edit-{id}' , "LibaryController@updateCategory")->name("category.update");
Route::get('/category-delete-{id}' , "LibaryController@showFormDeleteCategory")->name("category.delete");
Route::post('/category-delete-{id}' , "LibaryController@deleteCategory")->name("category.delete");
Route::get('/book-add' , "LibaryController@showFormAddBooks")->name("book.add");


