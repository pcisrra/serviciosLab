<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Beneficiarios
    Route::apiResource('beneficiarios', 'BeneficiariosApiController');

    // Maquinas
    Route::apiResource('maquinas', 'MaquinasApiController');

    // Proyectos
    Route::apiResource('proyectos', 'ProyectosApiController');

    // Pagos
    Route::apiResource('pagos', 'PagosApiController');
});
