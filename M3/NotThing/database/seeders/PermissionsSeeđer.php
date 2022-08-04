<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeđer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Danh mục sản phẩm',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'list_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'add_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'edit_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'delete_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sản phẩm',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem sản phẩm',
            'parent_id' => 6,
            'key_code' => 'list_product'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm sản phẩm',
            'parent_id' => 6,
            'key_code' => 'add_product'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa sản phẩm',
            'parent_id' => 6,
            'key_code' => 'edit_product'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa sản phẩm',
            'parent_id' => 6,
            'key_code' => 'delete_product'
        ]);
    }
}
