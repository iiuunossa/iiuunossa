<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requester')->unsigned();
            $table->tinyinteger('service_type_id')->unsigned()->nullable();
            $table->tinyinteger('service_domain_id')->unsigned()->nullable();
            $table->string('requester_detail_issue',256);
            $table->tinyinteger('queued')->unsigned()->nullable();
            $table->datetime('service_begin_at')->nullable();
            $table->string('checkup_detail',256)->nullable();
            $table->datetime('service_end_estimated')->nullable();
            $table->datetime('service_end_at')->nullable();
            $table->tinyinteger('issue_status_id')->unsigned()->nullable();
            $table->string('summary_report',500)->nullable();
            $table->boolean('need_followup')->nullable();
            $table->integer('service_by')->unsigned()->nullable();
            $table->tinyinteger('requester_rate_service')->unsigned()->nullable();
            $table->integer('creator')->unsigned();
            $table->integer('updater')->unsigned();
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
        Schema::drop('issues');
    }
}
