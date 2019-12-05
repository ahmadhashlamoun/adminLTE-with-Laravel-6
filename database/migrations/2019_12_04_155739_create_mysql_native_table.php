<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMysqlNativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement('
        create table mysql_native
            (
                id BIGINT(20) NOT NULL AUTO_INCREMENT,
                title varchar(64) not NULL,
                note varchar(255) DEFAULT NULL,
                created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                updated_at  timestamp NULL DEFAULT NULL,
                PRIMARY KEY (id),
                KEY title (title)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8
        ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mysql_native');
    }
}
