<?php

use App\Models\groupe;
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
        Schema::create('commments', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->foreignIdFor(User::class);
            $table->foreignIdfor(groupe::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commments');
    }
};
