<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('middlename')->nullable();;
            $table->string('lastname');
            $table->date('birthday');
            $table->enum('gender', ['male', 'female', 'other', 'notsay']);
            $table->string('email')->unique();
            $table->bigInteger('abfmid');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('level')->default(0);
            $table->boolean('pretest_complete')->default(false);
            $table->boolean('posttest_complete')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
