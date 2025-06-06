<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('skills', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('category'); // e.g., 'Cloud', 'DevOps', 'Programming'
        $table->integer('proficiency')->default(0); // 0-100
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
