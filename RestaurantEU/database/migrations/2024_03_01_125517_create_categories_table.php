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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id'); // 1 ap , 2 main, 3 dessert, 4 beverage
            $table->string('category_name');
            // $table->enum('types', ['steak', 'pasta'])->nullable()->when('category_id', 1);
            // $table->enum('types', ['เมนูเส้น', 'ข้าว/อื่นๆ', 'สเต็ก', 'กาแฟ/ชา', 'ไวน์', 'ของหวาน','อื่นๆ'])->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
