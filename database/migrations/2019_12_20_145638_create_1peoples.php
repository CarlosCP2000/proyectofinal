<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class Create1peoples extends Migration{
	public function up(){ 
 		Schema::create('peoples', function (Blueprint $table) { 
			$table->bigIncrements('dni');
			$table->string('name');
			$table->string('lastname');
			$table->string('school');
			$table->string('faculty');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}