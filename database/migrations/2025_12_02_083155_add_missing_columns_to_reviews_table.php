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
        Schema::table('reviews', function (Blueprint $table) {
            if (!Schema::hasColumn('reviews', 'name')) {
                $table->string('name')->nullable()->after('id');
            }
            if (!Schema::hasColumn('reviews', 'email')) {
                $table->string('email')->after('name');
            }
            if (!Schema::hasColumn('reviews', 'phone')) {
                $table->string('phone')->nullable()->after('email');
            }
            if (!Schema::hasColumn('reviews', 'rating')) {
                $table->tinyInteger('rating')->default(5)->after('phone');
            }
            if (!Schema::hasColumn('reviews', 'message')) {
                $table->text('message')->after('rating');
            }
            if (!Schema::hasColumn('reviews', 'status')) {
                $table->string('status')->default('approved')->after('message');
            }
            if (!Schema::hasColumn('reviews', 'ip')) {
                $table->ipAddress('ip')->nullable()->after('status');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            if (Schema::hasColumn('reviews', 'ip')) {
                $table->dropColumn('ip');
            }
            if (Schema::hasColumn('reviews', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('reviews', 'message')) {
                $table->dropColumn('message');
            }
            if (Schema::hasColumn('reviews', 'rating')) {
                $table->dropColumn('rating');
            }
            if (Schema::hasColumn('reviews', 'phone')) {
                $table->dropColumn('phone');
            }
            if (Schema::hasColumn('reviews', 'email')) {
                $table->dropColumn('email');
            }
            if (Schema::hasColumn('reviews', 'name')) {
                $table->dropColumn('name');
            }
        });
    }
};
