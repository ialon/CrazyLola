<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'store_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'distributor_create',
            ],
            [
                'id'    => 19,
                'title' => 'distributor_edit',
            ],
            [
                'id'    => 20,
                'title' => 'distributor_show',
            ],
            [
                'id'    => 21,
                'title' => 'distributor_delete',
            ],
            [
                'id'    => 22,
                'title' => 'distributor_access',
            ],
            [
                'id'    => 23,
                'title' => 'location_create',
            ],
            [
                'id'    => 24,
                'title' => 'location_edit',
            ],
            [
                'id'    => 25,
                'title' => 'location_show',
            ],
            [
                'id'    => 26,
                'title' => 'location_delete',
            ],
            [
                'id'    => 27,
                'title' => 'location_access',
            ],
            [
                'id'    => 28,
                'title' => 'store_create',
            ],
            [
                'id'    => 29,
                'title' => 'store_edit',
            ],
            [
                'id'    => 30,
                'title' => 'store_show',
            ],
            [
                'id'    => 31,
                'title' => 'store_delete',
            ],
            [
                'id'    => 32,
                'title' => 'store_access',
            ],
            [
                'id'    => 33,
                'title' => 'product_create',
            ],
            [
                'id'    => 34,
                'title' => 'product_edit',
            ],
            [
                'id'    => 35,
                'title' => 'product_show',
            ],
            [
                'id'    => 36,
                'title' => 'product_delete',
            ],
            [
                'id'    => 37,
                'title' => 'product_access',
            ],
            [
                'id'    => 38,
                'title' => 'inventory_create',
            ],
            [
                'id'    => 39,
                'title' => 'inventory_edit',
            ],
            [
                'id'    => 40,
                'title' => 'inventory_show',
            ],
            [
                'id'    => 41,
                'title' => 'inventory_delete',
            ],
            [
                'id'    => 42,
                'title' => 'inventory_access',
            ],
            [
                'id'    => 43,
                'title' => 'order_management_access',
            ],
            [
                'id'    => 44,
                'title' => 'order_create',
            ],
            [
                'id'    => 45,
                'title' => 'order_edit',
            ],
            [
                'id'    => 46,
                'title' => 'order_show',
            ],
            [
                'id'    => 47,
                'title' => 'order_delete',
            ],
            [
                'id'    => 48,
                'title' => 'order_access',
            ],
            [
                'id'    => 49,
                'title' => 'order_status_create',
            ],
            [
                'id'    => 50,
                'title' => 'order_status_edit',
            ],
            [
                'id'    => 51,
                'title' => 'order_status_show',
            ],
            [
                'id'    => 52,
                'title' => 'order_status_delete',
            ],
            [
                'id'    => 53,
                'title' => 'order_status_access',
            ],
            [
                'id'    => 54,
                'title' => 'order_item_create',
            ],
            [
                'id'    => 55,
                'title' => 'order_item_edit',
            ],
            [
                'id'    => 56,
                'title' => 'order_item_show',
            ],
            [
                'id'    => 57,
                'title' => 'order_item_delete',
            ],
            [
                'id'    => 58,
                'title' => 'order_item_access',
            ],
            [
                'id'    => 59,
                'title' => 'log_access',
            ],
            [
                'id'    => 60,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 61,
                'title' => 'product_status_create',
            ],
            [
                'id'    => 62,
                'title' => 'product_status_edit',
            ],
            [
                'id'    => 63,
                'title' => 'product_status_show',
            ],
            [
                'id'    => 64,
                'title' => 'product_status_delete',
            ],
            [
                'id'    => 65,
                'title' => 'product_status_access',
            ],
            [
                'id'    => 66,
                'title' => 'inventory_log_access',
            ],
            [
                'id'    => 67,
                'title' => 'product_log_access',
            ],
            [
                'id'    => 68,
                'title' => 'order_log_access',
            ],
            [
                'id'    => 69,
                'title' => 'report_management_access',
            ],
            [
                'id'    => 70,
                'title' => 'order_report_access',
            ],
            [
                'id'    => 71,
                'title' => 'product_report_access',
            ],
            [
                'id'    => 72,
                'title' => 'store_report_access',
            ],
            [
                'id'    => 73,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
