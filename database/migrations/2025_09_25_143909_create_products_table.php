<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();                           // primary key otomatis
        $table->string('name');                 // field nama produk
        $table->text('description');            // field deskripsi
        $table->decimal('price', 8, 2);         // field harga
        $table->integer('stock');               // field stok
        $table->string('category');             // field kategori
        $table->boolean('is_available')->default(true); // field tersedia (true/false)
        $table->timestamps();                   // created_at & updated_at otomatis
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
