<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameAndPhonenoToEventBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_books', function (Blueprint $table) {
            $table->string('name')->after('bookid');
            $table->bigInteger('phoneno')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_books', function (Blueprint $table) {
            $table->dropColumn(['name', 'phoneno']);
        });
    }
}
