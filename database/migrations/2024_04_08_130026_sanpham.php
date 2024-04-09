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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();
            $table->mediumText('motangan');
            $table->mediumText('motadai');
            $table->tinyInteger('hot')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('danhmuc_id')->nullable();
            $table->foreign('danhmuc_id')->references('id')->on('danhmuc')->onDelete('set null');
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
