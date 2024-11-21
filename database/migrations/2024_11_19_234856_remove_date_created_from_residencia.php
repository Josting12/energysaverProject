<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('residencia', function (Blueprint $table) {
            $table->date('date_created')->nullable()->default('2024-01-01'); // Valor por defecto
        });
    }

    public function down()
    {
        Schema::table('residencia', function (Blueprint $table) {
            $table->dropColumn('date_created');
        });
    }
};
