<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('job_title', 150)->nullable()->after('role');
            $table->text('bio')->nullable()->after('job_title');
            $table->string('avatar')->nullable()->after('bio');
            $table->string('linkedin')->nullable()->after('avatar');
            $table->string('twitter')->nullable()->after('linkedin');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['job_title', 'bio', 'avatar', 'linkedin', 'twitter']);
        });
    }
};
