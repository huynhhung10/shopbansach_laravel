<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('tbl_admin')->insert([
            [
                'admin_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'admin_phone' => '070123456',

            ]
        ]);

        DB::table('tbl_user')->insert([
            [
                'user_name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('1234'),
                'user_phone' => '070123456',
            ]
        ]);
        // =================================== TẠO DỮ LIỆU CHO BRAND ============================================== 

        DB::table('tbl_brand')->insert([
            [
                'product_name' => 'Starbuck',
                'product_content' => 'Đây là content của Sách kinh tếshséhhhhhhhhhhhhhhhh quần áoĐây là content của Sách quản lý quần áoĐây là content của Sách quản lý quần áo',
                'product_logo' => 'đây là logo cua sạđálkậbo',
                'product_status' => 1,
            ]
        ]);

        // =================================== TẠO DỮ LIỆU CHO CATEGORY ==============================================

        DB::table('tbl_category')->insert([
            [
                'product_name' => 'Sách kinh tế',
                'product_status' => 1,
            ]
        ]);

        // =================================== TẠO DỮ LIỆU CHO PRODUCT ==============================================

        DB::table('tbl_product')->insert([
            [
                'product_name' => 'Sách quản lý quần áo',
                'product_content' => 'Đây là content của Sách quản lý quần áoĐây là content của Sách quản lý quần áoĐây là content của Sách quản lý quần áoĐây là content của Sách quản lý quần áo',
                'product_price' => 200000,
                'product_author' => 'Châu Nhựt Hưng',
                'product_img' => 'Đây là đường link C:/alo/img',
                'product_quantity' => 10,
                'product_status' => 1,
                'product_feature' => 1,
            ]
        ]);
    }
}
