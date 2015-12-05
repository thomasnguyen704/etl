<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('requests', function($table) {
            
            # Increments method will make a primary key
            $table->increments('id');
            
            # Generates two columns: `created_at` and `updated_at`
            # To keep track of changes
            $table->timestamps();
            

            # The rest of the fields #
            
            # About
            $table->date('start');
            $table->string('client');
            $table->string('department');
            $table->string('user');//$table->integer('user')->unsigned(); // Foregin Key
            $table->text('purpose');
            $table->string('server_name');
            $table->string('host');
            $table->string('port');
            $table->text('code');
            $table->string('dictonary');
            $table->text('notes');
            $table->string('status');
            $table->date('end');

            /*
            # Join
            $table->foreign('user')->references('id')->on('users');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('requests');
    }
}
