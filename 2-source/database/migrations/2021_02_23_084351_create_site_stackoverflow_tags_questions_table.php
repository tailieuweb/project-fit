<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Foostart\Category\Helpers\FoostartMigration;

class CreateSiteStackoverflowTagsQuestionsTable extends FoostartMigration
{
    public function __construct() {
        $this->table = 'site_stackoverflow_tags_questions';
        $this->prefix_column = 'tag_question_';
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists($this->table);
        Schema::create($this->table, function (Blueprint $table) {

            $table->increments($this->prefix_column . 'id')->comment('Primary key');

            // Relation
            $table->integer('site_id')->comment('Site ID');

            // Other attributes
            $table->string($this->prefix_column . 'name', 55)->comment('Name');
            $table->string($this->prefix_column . 'machine_name', 55)->comment('Machine name');
            $table->text($this->prefix_column . 'description')->comment('Description');

            //Set common columns
            $this->setCommonColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
