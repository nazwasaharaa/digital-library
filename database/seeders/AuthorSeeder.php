<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'Andrea Hirata',
                'biografi' => 'Penulis novel Laskar Pelangi.',
                'tanggal_lahir' => '1967-10-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tere Liye',
                'biografi' => 'Penulis novel Indonesia.',
                'tanggal_lahir' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dee Lestari',
                'biografi' => 'Penulis dan penyanyi Indonesia.',
                'tanggal_lahir' => '1976-01-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
