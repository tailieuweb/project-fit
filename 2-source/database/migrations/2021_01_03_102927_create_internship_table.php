<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Foostart\Category\Helpers\FoostartMigration;

class CreateInternshipTable extends FoostartMigration
{
    public function __construct() {
        $this->table = 'internship';
        $this->prefix_column = 'internship_';
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
            $table->integer('category_id')->comment('Category ID');

            // Other attributes
            $table->string($this->prefix_column . 'name', 255)->comment('Internship name');
            $table->string($this->prefix_column . 'slug', 255)->comment('Internship slug');
            $table->string($this->prefix_column . 'website', 255)->nullable()->comment('Internship website');
            $table->string($this->prefix_column . 'tax_code', 255)->nullable()->comment('Internship tax code');
            $table->string($this->prefix_column . 'address', 500)->comment('Internship address');

            $table->string($this->prefix_column . 'image', 255)->nullable()->comment('Internship image');
            $table->text($this->prefix_column . 'description')->nullable()->comment('Internship description');

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
