<?php

use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            /* column:string */
            $table->string('publication')->nullable()->default('text');
            /* column:enum */
            $table->enum('state_publication', ['Publicado','Rechazado','Revision'])->nullable()->default('Recibido');
            /* column:text */
            $table->text('publication_content')->nullable();        
            $table->bigInteger('category_id')->nullable()->unsigned();
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
        Schema::dropIfExists('posts');
    }
}
