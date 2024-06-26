<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('thumbnail');
            $table->string('order_link');

            $table->bigInteger('user_id');

            $table->timestamp('published_at')->nullable(); // 'published_at'
            
            $table->softDeletes(); // 'deleted_at'
            $table->timestamps(); // 'created_at' && 'updated_at'
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('merchandises');
    }
};
