<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            
            // ID
            // name(string)
            // type(string)
            // description(string)
            $table->id();

            $table->string('name');
            
            $table->unsignedBigInteger('type_id'); // UAB, AB,
            $table->foreign('type_id')->references('id')->on('types');
            $table->text('description');
            $table->timestamps();
            
            
            //Pirminis variantas iki Type
            //$table->id();

            //$table->string('name');
            //$table->string('type');
            //$table->text('description');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
