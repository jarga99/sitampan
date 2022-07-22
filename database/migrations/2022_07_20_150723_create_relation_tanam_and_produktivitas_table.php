<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationTanamAndProduktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_produktivitas', function (Blueprint $table) {
            $table->foreign('tanam_id')->references('id_tanam')->on('mst_tanam')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mst_desa', function (Blueprint $table) {
        $table->dropForeign('tb_produktivitas_tanam_id_foreign');
        });

    }
}
