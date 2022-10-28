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
    }
}
