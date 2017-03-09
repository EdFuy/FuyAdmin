<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id')->comment('文档ID');
            $table->string('title', 50)->default('')->comment('标题');
            $table->integer('pid')->unsigned()->default(0)->comment('上级分类ID');
            $table->integer('sort')->unsigned()->default(0)->comment('排序（同级有效）');
            $table->char('url')->default('')->comment('链接地址');
            $table->boolean('hide')->default(0)->comment('是否隐藏');
            $table->string('tip')->default('')->comment('提示');
            $table->string('grp', 50)->nullable()->default('')->comment('分组');
            $table->boolean('is_dev')->default(0)->comment('是否仅开发者模式可见');
            $table->integer('auth_rule_id')->unsigned()->default(0);
            $table->string('icon')->nullable()->comment('图标');
            $table->boolean('position')->default(1)->comment('菜单位置类型 1顶部 2 侧栏 3内页');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('menus');

    }
}
