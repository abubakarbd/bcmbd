<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_lists', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('agent');
            $table->integer('bill');
            $table->integer('status')->default(1);
            $table->integer('january')->default(0);
            $table->integer('february')->default(0);
            $table->integer('march')->default(0);
            $table->integer('april')->default(0);
            $table->integer('may')->default(0);
            $table->integer('june')->default(0);
            $table->integer('july')->default(0);
            $table->integer('august')->default(0);
            $table->integer('september')->default(0);
            $table->integer('october')->default(0);
            $table->integer('november')->default(0);
            $table->integer('december')->default(0);
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
        Schema::dropIfExists('bill_lists');
    }
}
