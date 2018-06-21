<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('comments', function (Blueprint $table) {
        $table->unsignedInteger('post_id')->after('id');
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('comments', function (Blueprint $table) {
        $table->dropForeign('comments_post_id_foreign');
        $table->dropColumn('post_id');
      });
    }
}
