<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Foostart\Category\Helpers\FoostartMigration;

class CreateContactsTable extends FoostartMigration
{
    public function __construct() {
        $this->table = 'contacts';
        $this->prefix_column = 'contact_';
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
            $table->integer('user_id_assigner')->comment('User ID assigner');
            $table->integer('category_id')->comment('User ID assigner');
            
            // Other attributes
            //Sender
            $table->string($this->prefix_column . 'title', 255)->comment('Title');
            $table->text($this->prefix_column . 'description')->comment('Description');
            $table->string($this->prefix_column . 'email', 100)->comment('Email');
            $table->string($this->prefix_column . 'phone', 50)->comment('phone');
            $table->string($this->prefix_column . 'image', 255)->nullable()->comment('Image path');
            $table->string($this->prefix_column . 'files', 1000)->nullable()->comment('List ID of attachment filenames');
            $table->text($this->prefix_column . 'feedback')->comment('Feedback');
            
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
