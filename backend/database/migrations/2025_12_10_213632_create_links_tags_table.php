<?php

use App\Models\Link;
use App\Models\Tag;
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
        Schema::create('links_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Link::class, 'link_id')->index();
            $table->foreignIdFor(Tag::class, 'tag_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links_tags');
    }
};
