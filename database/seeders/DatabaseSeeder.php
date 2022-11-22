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
                'brand_name' => 'Nhà xuất bản A',
                'brand_content' => 'Đây là nhà xuất bản tên là A Đây là nhà xuất bản tên là A',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
            [
                'brand_name' => 'Nhà xuất bản B',
                'brand_content' => 'Đây là nhà xuất bản tên là B Đây là nhà xuất bản tên là A',
                'brand_logo' => '1 (3).jpg',
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
                'product_img' => '1 (3).jpg',
                'product_quantity' => 10,
                'product_featured' => 1,
                'status' => 1,

            ],
            [
                'product_name' => 'Sự tích bánh chưng bánh giày - Nhựt khánh',
                'brand_id' => '1',
                'category_id' => '2',
                'product_content' => 'Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh Đây là mô tả của  Sự tích bánh chưng bánh giày - Nhựt khánh',
                'product_price' => 200000,
                'product_author' => 'Nhựt Khánh',
                'product_img' => 'bia-sach2-9886.jpg',
                'product_quantity' => 10,
                'product_featured' => 1,
                'status' => 1,

            ],
            [
                'product_name' => 'Ai từng là con nít',
                'brand_id' => '2',
                'category_id' => '1',
                'product_content' => 'Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít Đây là mô tả của Ai từng là con nít ',
                'product_price' => 299000,
                'product_author' => 'Nhiều tác giả',
                'product_img' => 'aitunglaconnitjpg.jpg',
                'product_quantity' => 14,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'The delicate adornment',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of The delicate adornment book This is a content of The delicate adornment book This is a content of The delicate adornment book This is a content of The delicate adornment book This is a content of The delicate adornment book ',
                'product_price' => 349000,
                'product_author' => 'Dr.bob',
                'product_img' => 'artistic.png',
                'product_quantity' => 29,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Muốn nhanh thì phải Từ - Từ',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 139000,
                'product_author' => 'Anh ba xe ôm',
                'product_img' => 'bia-sach-hoc-vien-thiet-ke-viettamduc02.jpg',
                'product_quantity' => 8,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Dế mèn phiêu lưu ký',
                'brand_id' => '2',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Tạ Huy Long',
                'product_img' => 'bia-sach2-9886.jpg',
                'product_quantity' => 30,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Bộ luật dân sự và văn bản hướng dẫn thi hành',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản Lao động - Xã hội',
                'product_img' => 'body-2-Cong-Ly-2574-1416197358.jpg',
                'product_quantity' => 30,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Tô hoài Dế mèn phiêu lưu ký',
                'brand_id' => '2',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản văn hóa Thông tin',
                'product_img' => 'demen.jpg',
                'product_quantity' => 23,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Late Night Thoughts',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'VEE',
                'product_img' => 'latenighthough.jpg',
                'product_quantity' => 6,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Lunar Storm',
                'brand_id' => '2',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Terry Crosby',
                'product_img' => 'lunarstorm.jpeg',
                'product_quantity' => 9,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Đại cường về Nhà nước và pháp luật',
                'brand_id' => '1',
                'category_id' => '1',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản đại học Quốc gia Hà Nội',
                'product_img' => 'sach_Tan_Nhat_Minh-669x1024.png',
                'product_quantity' => 40,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'The Beauty Within',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Samantha Donald',
                'product_img' => 'thebeautyWithin.jpg',
                'product_quantity' => 11,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Văn hóa Thăng Long',
                'brand_id' => '2',
                'category_id' => '2',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Nhuận Ngọc',
                'product_img' => 'vanhoathanglong.png',
                'product_quantity' => 19,
                'product_featured' => 1,
                'status' => 1,
            ],
        ]);
    }
}
