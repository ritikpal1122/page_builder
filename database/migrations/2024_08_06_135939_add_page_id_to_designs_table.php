<?php
// database/migrations/xxxx_xx_xx_add_page_id_to_designs_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPageIdToDesignsTable extends Migration
{
    public function up()
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->string('page_id',50)->after('id'); // Assuming 'id' is your primary key
            // $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade'); // Assuming you have a 'pages' table
        });
    }

    public function down()
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->dropColumn('page_id');
        });
    }
}
