<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddInvoiceIdToFailedChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->timestamp('enabled_at')->nullable()->default(null);
            $table->integer('order');
            $table->unsignedInteger('image_id')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('enabled_at');
            $table->dropColumn('order');
            $table->dropColumn('image_id');
        });
    }
}