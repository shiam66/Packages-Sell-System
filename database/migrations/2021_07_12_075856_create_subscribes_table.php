<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('companyName');
            $table->string('phoneNumber');
            $table->string('email',100)->unique();
            $table->text('address');
            $table->text('pageName');
            $table->integer('tradeLicence');
            $table->text('userPhoto');
            $table->text('nidCard');
            $table->text('packageName');
            $table->text('period');
            $table->text('amount');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('subscribes');
    }
}
