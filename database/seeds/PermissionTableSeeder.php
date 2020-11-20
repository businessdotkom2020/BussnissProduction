<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'product-list',
            'product-create',
            'product-edit',
            'product-delete',

            'request-list',
            'request-create',
            'request-edit',
            'request-delete',

            'job-list',
            'job-create',
            'job-edit',
            'job-delete',

            'tag-list',
            'tag-create',
            'tag-edit',
            'tag-delete',

            'city-list',
            'city-create',
            'city-edit',
            'city-delete',

            'country-list',
            'country-create',
            'country-edit',
            'country-delete',

            'state-list',
            'state-create',
            'state-edit',
            'state-delete',

            'attr-list',
            'attr-create',
            'attr-edit',
            'attr-delete',

            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',

            'client-list',
            'client-create',
            'client-edit',
            'client-delete',

            'zone-list',
            'zone-create',
            'zone-edit',
            'zone-delete',

            'service-list',
            'service-create',
            'service-edit',
            'service-delete',

            'category-list',
            'category-create',
            'category-edit',
            'category-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'supplier-list',
            'supplier-create',
            'supplier-edit',
            'supplier-delete',

            'branch-list',
            'branch-create',
            'branch-edit',
            'branch-delete',

            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',

            'option-edit',
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
