<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_profile')->nullable();            
            $table->string('name');
            $table->string('sub_group_id')->nullable();
            $table->timestamps();
        });
        Schema::table('company_groups',function (Blueprint $table){
            $table->foreign('sub_group_id')->references('id')->on('company_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_groups');
    }
}
