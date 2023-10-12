<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username',50)->comment('用户名');
            $table->string('truename',20)->comment('真实姓名');
            $table->string('password',255)->comment('密码');
            $table->string('email',50)->comment('邮箱');
            $table->enum('sex',['先生','女士'])->default('先生')->comment('先生');
            $table->char('phone',15)->comment('手机');
            $table->char('last_ip',15)->comment('最后登录ip');
            $table->timestamps();
            $table->softDeletes();
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
