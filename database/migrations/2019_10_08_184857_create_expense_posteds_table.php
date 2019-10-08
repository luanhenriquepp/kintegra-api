<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensePostedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_expense_posted', function (Blueprint $table) {
            $table->increments('cd_expense_posted');
            $table->string('ds_expense_posted');
            $table->date('dt_expense_posted');
            $table->boolean('expense_posted_status');
            $table->decimal('expense_posted_value');

            $table->integer('cd_payment_category')->unsigned();
            $table->foreign('cd_payment_category', 'cd_payment_category_fk')
                ->references('cd_payment_category')
                ->on('tb_payment_category');

            $table->string('cd_payment_code', '1');
            $table->foreign('cd_payment_code', 'cd_payment_code_fk')
                ->references('cd_payment_code')
                ->on('tb_payment_code');

            $table->string('cd_payment', '1');
            $table->foreign('cd_payment', 'cd_payment_fk')
                ->references('cd_payment')
                ->on('tb_payment');

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
        Schema::dropIfExists('tb_expense_posted');
    }
}
