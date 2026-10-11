<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $author = DB::table('authors')
            ->where('name', 'Andrea Hirata')
            ->first();

        $publisher = DB::table('publishers')
            ->where('name', 'Gramedia Pustaka Utama')
            ->first();

        if (!$author || !$publisher) {
            throw new \RuntimeException(
                'Jalankan AuthorSeeder dan PublisherSeeder terlebih dahulu.'
            );
        }

        DB::table('books')->insert([
            [
                'title' => 'Laskar Pelangi',
                'author_id' => $author->id,
                'publisher_id' => $publisher->id,
                'kategori' => 'Novel',
                'jumlah' => 10,
                'isbn' => '9789793062792',
                'tahun_terbit' => 2005,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sang Pemimpi',
                'author_id' => $author->id,
                'publisher_id' => $publisher->id,
                'kategori' => 'Novel',
                'jumlah' => 8,
                'isbn' => '9789793062793',
                'tahun_terbit' => 2006,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
