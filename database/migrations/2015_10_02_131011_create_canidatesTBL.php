<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanidatesTBL extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canidates', function (Blueprint $table) {
            $table->increments('id');
            
            #personal info 
            $table->string('name');
            $table->integer('phone_number');
            $table->string('adress')->nullable();
            


            # election info 
            $table->string('enroll_type');                      // 3omal fala7en 
            $table->string('enroll_list')->nullable();          // fardy - kwa2m 
            $table->string('political_party')->nullable();      // el 7ezb 
                
            $table->string('government');   // el mo7afza 
            $table->string('gov_circle');   // el dayra el ent5abya 
            $table->integer('list_number'); // rakm el morsh7 
            $table->string('election_ico'); //el ramz el ent5aby 

            $table->string('campaign_solgan')->nullable();         // sh3ar el 7amla el ent5abya 
            $table->string('campaign_program',255)->nulable();     //  el brnamg el ent5any lel morsh7 
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
        Schema::drop('canidates');
    }
}
