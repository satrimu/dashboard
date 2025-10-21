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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['superadmin', 'admin', 'sekretariat', 'user'])->default('user');
            $table->string('full_name')->nullable(); // Optional full name
            $table->text('address')->nullable(); // Optional address
            $table->string('phone')->nullable(); // Optional phone
            $table->text('note')->nullable(); // Optional notes
            $table->string('image')->nullable(); // Optional profile image
            $table->boolean('is_active')->default(true); // Active status
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'role',
                'full_name',
                'address',
                'phone',
                'note',
                'image',
                'is_active',
            ]);
        });
    }
};
