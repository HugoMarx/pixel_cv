<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position');
            $table->string('address');
            $table->string('email');
            $table->text('bio');
            $table->date('birth_date');
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('label');
            $table->date('date_start');
            $table->date('date_end');
            $table->tinyText('description');
            $table->string('location');
            $table->string('type');
            $table->string('url'); 
        });

        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
            $table->string('label');
            $table->string('description');   
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('label');
            $table->string('level');  
        });

        Schema::create('interests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('label');
            $table->string('description'); 
            $table->string('url');
        });

        Schema::create('profile_url', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->text('url');
            $table->foreignIdFor(Profile::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('languages');
        Schema::dropIfExists('interests');
        Schema::dropIfExists('profile_url');
    }
};
