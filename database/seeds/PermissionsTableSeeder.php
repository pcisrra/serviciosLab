<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'title' => 'user_management_access',
            ],
            [
                'title' => 'permission_create',
            ],
            [
                'title' => 'permission_edit',
            ],
            [
                'title' => 'permission_show',
            ],
            [
                'title' => 'permission_delete',
            ],
            [
                'title' => 'permission_access',
            ],
            [
                'title' => 'role_create',
            ],
            [
                'title' => 'role_edit',
            ],
            [
                'title' => 'role_show',
            ],
            [
                'title' => 'role_delete',
            ],
            [
                'title' => 'role_access',
            ],
            [
                'title' => 'user_create',
            ],
            [
                'title' => 'user_edit',
            ],
            [
                'title' => 'user_show',
            ],
            [
                'title' => 'user_delete',
            ],
            [
                'title' => 'user_access',
            ],
            [
                'title' => 'beneficiario_create',
            ],
            [
                'title' => 'beneficiario_edit',
            ],
            [
                'title' => 'beneficiario_show',
            ],
            [
                'title' => 'beneficiario_delete',
            ],
            [
                'title' => 'beneficiario_access',
            ],
            [
                'title' => 'maquina_create',
            ],
            [
                'title' => 'maquina_edit',
            ],
            [
                'title' => 'maquina_show',
            ],
            [
                'title' => 'maquina_delete',
            ],
            [
                'title' => 'maquina_access',
            ],
            [
                'title' => 'proyecto_create',
            ],
            [
                'title' => 'proyecto_edit',
            ],
            [
                'title' => 'proyecto_show',
            ],
            [
                'title' => 'proyecto_delete',
            ],
            [
                'title' => 'proyecto_access',
            ],
            [
                'title' => 'pago_create',
            ],
            [
                'title' => 'pago_edit',
            ],
            [
                'title' => 'pago_show',
            ],
            [
                'title' => 'pago_delete',
            ],
            [
                'title' => 'pago_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
