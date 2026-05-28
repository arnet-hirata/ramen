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
        //
        Schema::create('store_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->nullable()//外部キーにnullを設定
            ->constrained('users');
            $table->foreignId('store_id')
            ->nullable()//外部キーにnullを設定
            ->constrained('stores'); //関連するテーブルを指定
            $table->double('review');
            $table->text('comment');
            $table->timestamps();
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
