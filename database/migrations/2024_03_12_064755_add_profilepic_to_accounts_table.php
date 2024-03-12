<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_profilepic_to_accounts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilepicToAccountsTable extends Migration
{
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->string('profilepic')->nullable()->after('roles'); // Change 'existing_column' to the name of an existing column, or remove 'after' to add the column at the end.
        });
    }

    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropColumn('profilepic');
        });
    }
}
