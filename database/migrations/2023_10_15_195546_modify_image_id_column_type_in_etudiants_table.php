<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyImageIdColumnTypeInEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('etudiants', function (Blueprint $table) {
            $table->string('new_image_id')->nullable();
        });


        \DB::statement('UPDATE etudiants SET new_image_id = image_id');


        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropColumn('image_id');
            $table->renameColumn('new_image_id', 'image_id'); 
        });
    }

    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->integer('image_id')->nullable()->change();
        });
    }
}
