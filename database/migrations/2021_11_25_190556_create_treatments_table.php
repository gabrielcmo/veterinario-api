<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dog_id')->constraint('dogs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('doctor_id')->constraint('doctors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('status_id')->constraint('treatment_statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('condition');
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
        Schema::dropIfExists('treatments');
    }
}
