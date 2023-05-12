<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('tweet');
            $table->string('title');
            $table->timestamps();
            // created_at,update_at = 作成した日付,更新した日付

            //Laravelでテーブルを作る際の全体像
            //１．マイグレーションファイルを作成
            //２．カラムを定義する（$table->～）
            //３．コマンドを打つ php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samples');
    }
}
