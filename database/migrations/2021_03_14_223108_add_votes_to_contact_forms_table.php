<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->string('your_name', 20)->after('id');
            $table->string('email', 255)->after('your_name');
            $table->longText('url')->nullable($value = true)->after('email');
            $table->boolean('gender')->after('url');
            $table->tinyInteger('age')->after('gender');
            $table->string('contact', 200)->after('age');
            $table->string('title', 255)->after('contact');
            $table->boolean('caution', 255)->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
        });
    }
}
