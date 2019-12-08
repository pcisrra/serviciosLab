<?php

return [
    'userManagement' => [
        'title'          => 'Gestión de usuarios',
        'title_singular' => 'Gestión de usuarios',
    ],
    'permission'     => [
        'title'          => 'Permisos',
        'title_singular' => 'Permisos',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'beneficiario'   => [
        'title'          => 'Beneficiarios',
        'title_singular' => 'Beneficiario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'ci'                       => 'CI',
            'ci_helper'                => '',
            'nombres'                  => 'Nombres',
            'nombres_helper'           => '',
            'ap_paterno'               => 'Apellido Paterno',
            'ap_paterno_helper'        => '',
            'ap_materno'               => 'Apellido Materno',
            'ap_materno_helper'        => '',
            'fecha_nacimiento'         => 'Fecha Nacimiento',
            'fecha_nacimiento_helper'  => '',
            'edad'                     => 'Edad',
            'edad_helper'              => '',
            'correo'                   => 'Correo',
            'correo_helper'            => '',
            'celular'                  => 'Celular',
            'celular_helper'           => '',
            'zona_domicilio'           => 'Zona Domicilio',
            'zona_domicilio_helper'    => '',
            'ocupacion'                => 'Ocupación',
            'ocupacion_helper'         => '',
            'tipo_beneficiario'        => 'Tipo Beneficiario',
            'tipo_beneficiario_helper' => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'maquina'        => [
        'title'          => 'Máquinas',
        'title_singular' => 'Máquina',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'codigo'                => 'Código',
            'codigo_helper'         => '',
            'nombre'                => 'Nombre',
            'nombre_helper'         => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
            'estado'                => 'Estado',
            'estado_helper'         => '',
            'disponibilidad'        => 'Disponibilidad',
            'disponibilidad_helper' => '',
        ],
    ],
    'proyecto'       => [
        'title'          => 'Proyectos',
        'title_singular' => 'Proyecto',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'cliente'                 => 'Beneficiario',
            'cliente_helper'          => '',
            'maquina_asignada'        => 'Máquina Asignada',
            'maquina_asignada_helper' => '',
            'fecha_propuesta'         => 'Fecha de Solicitud',
            'fecha_propuesta_helper'  => '',
            'usuario_acepta'          => 'Aprobado por',
            'usuario_acepta_helper'   => '',
            'usuario_cargo'           => 'Realizado por',
            'usuario_cargo_helper'    => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'codigo_proyecto'         => 'Código',
            'codigo_proyecto_helper'  => '',
        ],
    ],
    'pago'           => [
        'title'          => 'Pagos',
        'title_singular' => 'Pago',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'usuario_cobra'            => 'Pago registrado por',
            'usuario_cobra_helper'     => '',
            'beneficiario_pago'        => 'CI de Beneficiario',
            'beneficiario_pago_helper' => '',
            'fecha_pago'               => 'Fecha del Pago',
            'fecha_pago_helper'        => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'monto'                    => 'Monto',
            'monto_helper'             => '',
        ],
    ],
];
