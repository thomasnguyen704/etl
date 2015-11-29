<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('req', function($table) {
            
            # Increments method will make a primary key
            $table->increments('id');
            
            # Generates two columns: `created_at` and `updated_at`
            # To keep track of changes
            $table->timestamps();
            

            # The rest of the fields #
            
            # About
            $table->date('start');
            $table->string('client');
            $table->integer('user')->unsigned(); // Foregin Key
            $table->text('purpose');

            # Connection Information
            $table->string('server');
            $table->string('host');
            $table->string('port');
            $table->string('type');
            $table->text('code');

            # Notes
            $table->binary('dictonary');
            $table->binary('diagram');
            $table->binary('other');

            # Status
            $table->string('status');
            $table->date('end');

            # Join
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('req');
    }
}
