<?php

use App\Models\LinkList;
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
        Schema::create('links', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class, 'user_id')->index();
            $table->foreignIdFor(LinkList::class, 'link_list_id')->index();

            $table->string('title');
            $table->string('description')->nullable();

            $table->string('slug')->index();

            $table->string('schema');
            $table->string('host');

            $table->string('path')->nullable();
            $table->string('query')->nullable();
            $table->string('fragment')->nullable();

            $table->string('raw_url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
