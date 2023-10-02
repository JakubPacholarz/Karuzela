<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Studio;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25)->unique();
            $table->string('Gatunek', 25);
            $table->smallInteger('Odcinki');
            $table->text('description');
            $table->decimal('price');
            $table->string('img', 25);
            $table->foreignId('id_studia')->constrained('studios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};