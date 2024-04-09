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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sanpham_id'); // Đảm bảo rằng kiểu dữ liệu và định dạng của cột này phù hợp với cột "id" trong bảng "sanpham"
            $table->foreign('sanpham_id')->references('id')->on('sanpham')->onDelete('cascade');
            $table->unsignedBigInteger('id_user');
            $table->integer('quantity')->default(1);
            $table->timestamps();
        
         
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
