<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('empresa', 150)->nullable()->after('name');
            $table->string('cargo', 100)->nullable()->after('empresa');
            $table->string('ciudad', 100)->nullable()->after('cargo');
            $table->string('whatsapp', 30)->nullable()->after('ciudad');
            $table->string('empleados', 20)->nullable()->after('whatsapp');
            $table->string('preocupacion', 100)->nullable()->after('empleados');
            $table->string('subject', 200)->nullable()->change();
            $table->text('message')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['empresa', 'cargo', 'ciudad', 'whatsapp', 'empleados', 'preocupacion']);
            $table->string('subject', 200)->nullable(false)->change();
            $table->text('message')->nullable(false)->change();
        });
    }
};
