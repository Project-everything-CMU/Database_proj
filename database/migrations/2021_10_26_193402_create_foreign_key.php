<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Offices' , function (Blueprint $table){
            $table -> foreign('officeCode') -> reference('officeCode') -> on('Offices') ;
        });


        Schema::table('Customer' , function (Blueprint $table)
        {
            $table -> foreign('AddressID')  -> refenence('addr_ID') -> on('addrsses') -> ondelete('cascade') ; 
            $table -> foreign('SaleRepEmployeeNumber') -> reference('employeeNumber') -> on('Employee') ;

        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key');
    }
}
