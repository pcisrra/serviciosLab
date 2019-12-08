<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Beneficiarios
    Route::delete('beneficiarios/destroy', 'BeneficiariosController@massDestroy')->name('beneficiarios.massDestroy');
    Route::resource('beneficiarios', 'BeneficiariosController');

    // Maquinas
    Route::delete('maquinas/destroy', 'MaquinasController@massDestroy')->name('maquinas.massDestroy');
    Route::resource('maquinas', 'MaquinasController');

    // Proyectos
    Route::delete('proyectos/destroy', 'ProyectosController@massDestroy')->name('proyectos.massDestroy');
    Route::resource('proyectos', 'ProyectosController');

    // Pagos
    Route::delete('pagos/destroy', 'PagosController@massDestroy')->name('pagos.massDestroy');
    Route::resource('pagos', 'PagosController');
});
