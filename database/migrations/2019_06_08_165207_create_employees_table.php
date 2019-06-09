<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('picture_url');
            $table->bigInteger('type')->unsigned()->nullable();
            $table->foreign('type')
            ->references('id')->on('employee_types')->onDelete('set null');
            $table->string('position_label');
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->foreign('created_by')
            ->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('employees');
    }
}
