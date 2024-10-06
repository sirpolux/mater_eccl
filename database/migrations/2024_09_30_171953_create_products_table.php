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
            $table->id();
            $table->string("name");
            $table->longText("description")->nullable();
            $table->double("price");
            $table->integer("total_quantity");
            $table->integer("quantity_sold")->nullable()->default(0);
            $table->foreignId("category_id")->constrained("categories");
            $table->string("image_url");
            $table->string("publisher")->nullable();
            $table->date("publication_date")->nullable();
            $table->string("language")->nullable();
            $table->double("rating")->nullable();
            $table->string("isbn")->nullable();
            $table->integer("review_count");
            $table->timestamps();

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
