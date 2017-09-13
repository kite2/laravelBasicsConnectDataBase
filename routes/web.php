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
Route::get('/category-list' , "CategoryController@listAllCategories")->name("category.list");
Route::get('/category-add' , "CategoryController@showFormAddCategory")->name("category.add");
Route::post('/category-add' , "CategoryController@createCategory")->name("category.create");
Route::get('/category-edit-{id}' , "CategoryController@showFormEditCategory")->name("category.edit");
Route::post('/category-edit-{id}' , "CategoryController@updateCategory")->name("category.update");
Route::get('/category-delete-{id}' , "CategoryController@showFormDeleteCategory")->name("category.delete");
Route::post('/category-delete-{id}' , "CategoryController@deleteCategory")->name("category.delete");
Route::get('/author-list' , "AuthorController@listAllAuthors")->name("author.list");
Route::get('/author-add' , "AuthorController@showFormAddAuthor")->name("author.add");
Route::post('/author-add' , "AuthorController@createAuthor")->name("author.create");
Route::get('/author-edit-{id}' , "AuthorController@showFormEditAuthor")->name("author.edit");
Route::post('/author-edit-{id}' , "AuthorController@updateAuthor")->name("author.update");
Route::get('/author-delete-{id}' , "AuthorController@showFormDeleteAuthor")->name("author.delete");
Route::post('/author-delete-{id}' , "AuthorController@deleteAuthor")->name("author.delete");
Route::get('/book-add' , "LibaryController@showFormAddBooks")->name("book.add");


