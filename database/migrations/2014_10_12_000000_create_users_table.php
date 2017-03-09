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
            $table->string('nick', 64)->nullable()->unique('nick')->comment('昵称');
            $table->string('username', 100);
            $table->string('password', 64);
            $table->boolean('is_audit')->default(0)->comment('是否通过审核 0 不通过 1 通过');
            $table->boolean('is_active')->default(0)->comment('是否已激活 0 未激活 1已激活');
            $table->boolean('is_init')->default(0)->comment('是否初始化 0未初始化 1已初始化');
            $table->boolean('identity')->default(0)->comment('身份标识 ');
            $table->bigInteger('reg_ip')->default(0)->comment('注册ip地址');
            $table->boolean('status')->default(1)->comment('是否禁用 1未禁用 0已禁用 -9删除');
            $table->integer('last_login_time');
            $table->bigInteger('last_login_ip')->comment('最后登录ip');
            $table->integer('login')->unsigned()->default(0)->comment('登录次数');
            $table->integer('score')->default(0)->comment('积分');
            $table->string('email')->nullable()->comment('邮箱');
            $table->decimal('amount', 11)->nullable()->default(0.00)->comment('余额');
            $table->string('phone', 20)->nullable()->comment('手机号码');
            $table->char('salt', 6)->comment('密钥');
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
        Schema::drop('users');
    }
}
