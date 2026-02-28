<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Insert specifically into the 'admins' table
        DB::table('admins')->updateOrInsert(
            ['email' => 'admin@inngroup.com.au'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin@123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
