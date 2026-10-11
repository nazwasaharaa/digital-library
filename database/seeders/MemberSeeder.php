<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'name' => 'Andi Saputra',
                'email' => 'andi@example.com',
                'phone' => '081234567890',
                'alamat' => 'Banda Aceh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Rahma',
                'email' => 'siti@example.com',
                'phone' => '082345678901',
                'alamat' => 'Aceh Besar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Muhammad Rizki',
                'email' => 'rizki@example.com',
                'phone' => '083456789012',
                'alamat' => 'Lhokseumawe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
