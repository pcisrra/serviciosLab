<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'beneficiario_create',
            ],
            [
                'id'    => '18',
                'title' => 'beneficiario_edit',
            ],
            [
                'id'    => '19',
                'title' => 'beneficiario_show',
            ],
            [
                'id'    => '20',
                'title' => 'beneficiario_delete',
            ],
            [
                'id'    => '21',
                'title' => 'beneficiario_access',
            ],
            [
                'id'    => '22',
                'title' => 'maquina_create',
            ],
            [
                'id'    => '23',
                'title' => 'maquina_edit',
            ],
            [
                'id'    => '24',
                'title' => 'maquina_show',
            ],
            [
                'id'    => '25',
                'title' => 'maquina_delete',
            ],
            [
                'id'    => '26',
                'title' => 'maquina_access',
            ],
            [
                'id'    => '27',
                'title' => 'proyecto_create',
            ],
            [
                'id'    => '28',
                'title' => 'proyecto_edit',
            ],
            [
                'id'    => '29',
                'title' => 'proyecto_show',
            ],
            [
                'id'    => '30',
                'title' => 'proyecto_delete',
            ],
            [
                'id'    => '31',
                'title' => 'proyecto_access',
            ],
            [
                'id'    => '32',
                'title' => 'pago_create',
            ],
            [
                'id'    => '33',
                'title' => 'pago_edit',
            ],
            [
                'id'    => '34',
                'title' => 'pago_show',
            ],
            [
                'id'    => '35',
                'title' => 'pago_delete',
            ],
            [
                'id'    => '36',
                'title' => 'pago_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
