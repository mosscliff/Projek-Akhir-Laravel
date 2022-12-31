<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rokoks', function (Blueprint $table) {
            $table->string('Ikan')->primary();
            $table->text('Mamalia');
            $table->text('Reptil');
            $table->text('Unggas');
            $table->text('Amfibi');
            $table->timestamps();
        });
    }
    public function edit($Ikan){
        $model= Rokok::find($Ikan);
        return view('edit-rokok')->with('post',$model);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::dropIfExists('rokoks');
    }
};
