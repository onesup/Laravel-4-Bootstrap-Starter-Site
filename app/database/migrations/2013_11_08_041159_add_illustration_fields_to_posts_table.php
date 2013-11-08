<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddIllustrationFieldsToPostsTable extends Migration {

	/**
	 * Make changes to the table.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::table('posts', function(Blueprint $table) {		
			
			$table->string("illustration_file_name")->nullable();
			$table->integer("illustration_file_size")->nullable();
			$table->string("illustration_content_type")->nullable();
			$table->timestamp("illustration_updated_at")->nullable();

		});

	}

	/**
	 * Revert the changes to the table.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function(Blueprint $table) {

			$table->dropColumn("illustration_file_name");
			$table->dropColumn("illustration_file_size");
			$table->dropColumn("illustration_content_type");
			$table->dropColumn("illustration_updated_at");

		});
	}

}