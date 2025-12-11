<?php

use App\Models\User;
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
        Schema::create('link_lists', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class, 'user_id')->index();

            $table->string('name');
            $table->string('description')->nullable();

            $table->string('slug')->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_lists');
    }
};
