<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('amount')->default(0);
            $table->integer('admission_fee')->default(0);
            $table->integer('tution_fee')->default(0);
            $table->integer('other_expense')->default(0);
            $table->integer('khoraki')->default(0);
            $table->string('ref_no', 100)->unique();
            $table->string('method', 100)->default('cash');
            $table->unsignedInteger('my_class_id')->nullable();
            $table->string('department')->nullable();
            $table->string('description')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
