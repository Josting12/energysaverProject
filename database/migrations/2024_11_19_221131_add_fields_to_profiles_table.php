<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // Agrega las nuevas columnas
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
            $table->date('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // Elimina solo si las columnas existen
            if (Schema::hasColumn('profiles', 'field2')) {
                $table->dropColumn('field2');
            }
            if (Schema::hasColumn('profiles', 'field3')) {
                $table->dropColumn('field3');
            }
            if (Schema::hasColumn('profiles', 'field4')) {
                $table->dropColumn('field4');
            }
            if (Schema::hasColumn('profiles', 'date')) {
                $table->dropColumn('date');
            }
        });
    }
}
