<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNameInCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TASK: write the migration to rename the column "title" into "name"
        if (Schema::hasColumn('companies', 'title')) {
            Schema::table('companies', function (Blueprint $table) {
                // Write code here
                $table->renameColumn('title', 'name');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('companies', 'name')) {
            Schema::table('companies', function (Blueprint $table) {
                // Write code here
                $table->renameColumn('name', 'title');
            });
        }
    }
}