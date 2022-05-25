<?php

return [
    'userManagement' => [
        'title'          => 'Gestión de Usuarios',
        'title_singular' => 'Gestión de Usuarios',
    ],
    'permission' => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Nombre',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Nombre',
            'title_helper'       => ' ',
            'permissions'        => 'Permisos',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Nombre',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verificado',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'dui'                      => 'DUI',
            'dui_helper'               => ' ',
            'lastname'                 => 'Apellido',
            'lastname_helper'          => ' ',
            'hire_date'                => 'Fecha de contratación',
            'hire_date_helper'         => ' ',
        ],
    ],
    'storeManagement' => [
        'title'          => 'Almacenes',
        'title_singular' => 'Almacene',
    ],
    'distributor' => [
        'title'          => 'Distribuidores',
        'title_singular' => 'Distribuidore',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nombre',
            'name_helper'        => ' ',
            'description'        => 'Descripción',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'location'           => 'Ubicación',
            'location_helper'    => ' ',
        ],
    ],
    'location' => [
        'title'          => 'Ubicaciones',
        'title_singular' => 'Ubicacione',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'country'            => 'País',
            'country_helper'     => ' ',
            'state'              => 'Estado',
            'state_helper'       => ' ',
            'city'               => 'Ciudad',
            'city_helper'        => ' ',
            'address'            => 'Dirección',
            'address_helper'     => ' ',
            'details'            => 'Detalles',
            'details_helper'     => ' ',
            'postal_code'        => 'Código Postal',
            'postal_code_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'name'               => 'Nombre',
            'name_helper'        => ' ',
        ],
    ],
    'store' => [
        'title'          => 'Listado',
        'title_singular' => 'Listado',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nombre',
            'name_helper'        => ' ',
            'description'        => 'Descripción',
            'description_helper' => ' ',
            'location'           => 'Ubicación',
            'location_helper'    => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Productos',
        'title_singular' => 'Producto',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'sku'                    => 'SKU',
            'sku_helper'             => ' ',
            'name'                   => 'Nombre',
            'name_helper'            => ' ',
            'description'            => 'Descripción',
            'description_helper'     => ' ',
            'unit_price'             => 'Precio Unitario',
            'unit_price_helper'      => ' ',
            'weight'                 => 'Peso',
            'weight_helper'          => ' ',
            'due_date'               => 'Fecha de vencimiento',
            'due_date_helper'        => ' ',
            'production_date'        => 'Fecha de producción',
            'production_date_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'status'                 => 'Estado',
            'status_helper'          => ' ',
        ],
    ],
    'inventory' => [
        'title'          => 'Inventario',
        'title_singular' => 'Inventario',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'quantity'          => 'Cantidad',
            'quantity_helper'   => ' ',
            'store'             => 'Almacen',
            'store_helper'      => ' ',
            'product'           => 'Producto',
            'product_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'orderManagement' => [
        'title'          => 'Ordenes',
        'title_singular' => 'Ordene',
    ],
    'order' => [
        'title'          => 'Listado',
        'title_singular' => 'Listado',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'order_date'         => 'Fecha de orden',
            'order_date_helper'  => ' ',
            'user'               => 'Empleado',
            'user_helper'        => ' ',
            'distributor'        => 'Distribuidor',
            'distributor_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'status'             => 'Estado',
            'status_helper'      => ' ',
        ],
    ],
    'orderStatus' => [
        'title'          => 'Estados',
        'title_singular' => 'Estado',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'orderItem' => [
        'title'          => 'Detalle de orden',
        'title_singular' => 'Detalle de orden',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'unit_price'        => 'Precio Unitario',
            'unit_price_helper' => ' ',
            'quantity'          => 'Cantidad',
            'quantity_helper'   => ' ',
            'order'             => 'Orden',
            'order_helper'      => ' ',
            'product'           => 'Producto',
            'product_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'log' => [
        'title'          => 'Historial',
        'title_singular' => 'Historial',
    ],
    'productManagement' => [
        'title'          => 'Productos',
        'title_singular' => 'Producto',
    ],
    'productStatus' => [
        'title'          => 'Estados',
        'title_singular' => 'Estado',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'inventoryLog' => [
        'title'          => 'Inventario',
        'title_singular' => 'Inventario',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'inventory'         => 'Inventario',
            'inventory_helper'  => ' ',
            'quantity'          => 'Cantidad',
            'quantity_helper'   => ' ',
            'store'             => 'Almacen',
            'store_helper'      => ' ',
            'product'           => 'Producto',
            'product_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productLog' => [
        'title'          => 'Producto',
        'title_singular' => 'Producto',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'sku'                    => 'SKU',
            'sku_helper'             => ' ',
            'status'                 => 'Estado',
            'status_helper'          => ' ',
            'name'                   => 'Nombre',
            'name_helper'            => ' ',
            'description'            => 'Descripción',
            'description_helper'     => ' ',
            'unit_price'             => 'Precio Unitario',
            'unit_price_helper'      => ' ',
            'weight'                 => 'Peso',
            'weight_helper'          => ' ',
            'due_date'               => 'Fecha de vencimiento',
            'due_date_helper'        => ' ',
            'production_date'        => 'Fecha de producción',
            'production_date_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'orderLog' => [
        'title'          => 'Ordenes',
        'title_singular' => 'Ordene',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'order'              => 'Orden',
            'order_helper'       => ' ',
            'order_date'         => 'Fecha de orden',
            'order_date_helper'  => ' ',
            'user'               => 'Empleado',
            'user_helper'        => ' ',
            'distributor'        => 'Distribuidor',
            'distributor_helper' => ' ',
            'status'             => 'Estado',
            'status_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
];