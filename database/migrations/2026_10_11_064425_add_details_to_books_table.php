
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('kategori')->nullable();
            $table->integer('jumlah')->default(0);
            $table->string('isbn')->nullable()->unique();
            $table->year('tahun_terbit')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropUnique(['isbn']);
            $table->dropColumn([
                'kategori',
                'jumlah',
                'isbn',
                'tahun_terbit',
            ]);
        });
    }
};