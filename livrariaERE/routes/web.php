<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('livro/novo', 'LivrosController@create')->name('novo_livro');
Route::post('livro/novo', 'LivrosController@store')->name('salvar_livro');
Route::get('livros/ver', 'LivrosController@show')->name('show_livro');
Route::get('livro/del/{id}', 'LivrosController@destroy')->name('excluir_livro');
Route::get('livro/edit/{id}', 'LivrosController@edit')->name('editar_livro');
Route::post('livro/edit/{id}', 'LivrosController@update')->name('atualizar_livro');