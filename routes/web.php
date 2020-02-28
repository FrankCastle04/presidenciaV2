<?php

//Esta dirige a la pagina home y la vista se llama home
Route::view('/','home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('empleados', 'EmpleadoController')
		 ->parameters(['empleados' => 'emplea'])
		 ->names('empleados');

// Route::get('/empleados', 'EmpleadoController@index')->name('empleados.index');
// Route::get('/empleados/create', 'EmpleadoController@create')->name('empleados.create');
// Route::get('/empleados/{emplea}/editar', 'EmpleadoController@edit')->name('empleados.edit');
//Route::patch('/empleados/{emplea}', 'EmpleadoController@updateOrInsert')->name('empleados.update');
// Route::post('/empleados', 'EmpleadoController@store')->name('empleados.store');
// Route::get('/empleados/{emplea}', 'EmpleadoController@show')->name('empleados.show');
// Route::delete('/empleados/{emplea}', 'EmpleadoController@destroy')->name('empleados.destroy');

Route::view('/datos','datos')->name('datos');
Route::view('/direccion','direccion')->name('direccion');
Route::view('/contacto','contacto')->name('contacto');
Route::view('/area','area')->name('area');


//Route::view('/empleados','empleados', compact('emplead'))->name('empleados');
//desactivar el registro cuando se haya creado un usuario por default y activar el de abajo
Auth::routes();
//Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');
