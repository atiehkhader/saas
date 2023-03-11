<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('ticket_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('phase_id');
            $table->foreign('phase_id')->references('id')->on('phases');
            $table->boolean('is_required');
            $table->enum('type',['input', 'radio', 'button', 'checkbox', 'textarea', 'slider', 'list', 'email', 'url', 'file', 'image', 'date', 'time', 'number']);
            $table->string('label');
            $table->text('description')->nullable();
            $table->enum('status',['active', 'inactive'])->default('inactive');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_fields');
    }
};
