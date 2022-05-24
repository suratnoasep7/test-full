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
                'title' => 'category_create',
            ],
            [
                'id'    => 2,
                'title' => 'category_edit',
            ],
            [
                'id'    => 3,
                'title' => 'category_show',
            ],
            [
                'id'    => 4,
                'title' => 'category_delete',
            ],
            [
                'id'    => 5,
                'title' => 'category_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
