<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->integer('branch')->nullable()->default(null);
            $table->string('peopleCity')->nullable()->default(null);
            $table->string('peopleReceiver')->nullable()->default(null);
            $table->numeric('peoplePhone')->nullable()->default(null);            
            $table->numeric('declaredValue')->nullable()->default(null);
            $table->numeric('amountToReceive')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('peopleIdentification')->nullable()->default(null);
            $table->string('shippingType')->nullable()->default(null);
            $table->numeric('width')->nullable()->default(null);
            $table->numeric('high')->nullable()->default(null);
            $table->numeric('long')->nullable()->default(null);
            $table->numeric('weight')->nullable()->default(null);
            $table->string('deliverySector')->nullable()->default(null);
            $table->date('toCollectDate')->nullable()->default(null);
            $table->json('skus')->nullable()->default(null);
            $table->string('order')->nullable()->default(null);
            $table->string('observation')->nullable()->default(null);
            $table->string('peopleEmail')->nullable()->default(null);
            $table->string('source')->nullable()->default(null);
            
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
        Schema::dropIfExists('envios');
    }
}
