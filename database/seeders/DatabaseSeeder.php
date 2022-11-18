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
        DB::table('tbl_customer')->insert([
            [
                'customer_avatar' => '197091314_1057977058290130_1264272207967432925_n.jpg',
                'customer_name' => 'hung',
                'email' => 'hung@gmail.com',
                'customer_username' => 'hunghg42',
                'password' => bcrypt('1234'),
                'customer_phone' => '0123456789',
                'status' => '0',
            ]
        ]);

        DB::table('tbl_admin')->insert([
            [
                'admin_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'admin_phone' => '070123456',

            ]
        ]);

        // DB::table('tbl_user')->insert([
        //     [
        //         'user_name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'password' => bcrypt('1234'),
        //         'user_phone' => '070123456',
        //     ]
        // ]);
        // // =================================== TẠO DỮ LIỆU CHO BRAND ============================================== 

        DB::table('tbl_brand')->insert([
            [
                'brand_name' => 'Nha xuat ban A',
                'brand_content' => 'Đây là nhà xuất bản tên là A Đây là nhà xuất bản tên là A',
                'brand_logo' => './frontend/img/products/1 (3).jpg',
                'brand_status' => 1,
            ],
            [
                'brand_name' => 'Nha xuat ban B',
                'brand_content' => 'Đây là nhà xuất bản tên là B Đây là nhà xuất bản tên là A',
                'brand_logo' => './frontend/img/products/1 (3).jpg',
                'brand_status' => 1,
            ]
        ]);

        // // =================================== TẠO DỮ LIỆU CHO CATEGORY ==============================================

        DB::table('tbl_category')->insert([
            [
                'category_name' => 'Loại sách X',
                'status' => 1,
            ],
            [
                'category_name' => 'Loại sách Y',
                'status' => 1,
            ],

            [
                'category_name' => 'Loại sách Z',
                'status' => 1,
            ]

        ]);

        // // =================================== TẠO DỮ LIỆU CHO PRODUCT ==============================================

        DB::table('tbl_product')->insert([
            [
                'product_name' => 'Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long Đây là mô tả của Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long ',
                'product_price' => 200000,
                'product_author' => 'Hoàng Long',
                'product_img' => './frontend/img/products/1 (3).jpg',
                'product_quantity' => 10,
                'status' => 1,

            ],
            [
                'product_name' => 'Sự tích bánh chưng bánh giày - Nhựt khánh',
                'brand_id' => '1',
                'category_id' => '2',
                'product_content' => 'Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh',
                'product_price' => 200000,
                'product_author' => 'Nhựt Khánh',
                'product_img' => './frontend/img/products/bia-sach2-9886.jpg',
                'product_quantity' => 10,
                'status' => 1,

            ],
        ]);
    }
}
