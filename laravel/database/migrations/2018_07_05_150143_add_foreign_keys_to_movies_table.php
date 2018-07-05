<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('movies', function(Blueprint $table)
		{
			$table->foreign('director_id')->references('id')->on('directors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('genre_id')->references('id')->on('genres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('movies', function(Blueprint $table)
		{
			$table->dropForeign('movies_director_id_foreign');
			$table->dropForeign('movies_genre_id_foreign');
		});
	}

}
