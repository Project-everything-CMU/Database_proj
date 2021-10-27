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
        // Schema::table('Offices' , function (Blueprint $table){
        //     $table -> foreign('officeCode') -> reference('officecode') -> on('Offices') -> ondelete('cascade');
        // });
        
        // Schema::table('employees' , function (Blueprint $table){
        //     $table -> foreign('officeCode') -> reference('officeCode') -> on('Offices') -> ondelete('cascade');
        // });

        // Schema::table('Customer' , function (Blueprint $table)
        // {
        //     $table -> foreign('AddressID')  -> refenence('addr_ID') -> on('addrsses') -> ondelete('cascade') ; 
        //     $table -> foreign('SaleRepEmployeeNumber') -> reference('employeeNumber') -> on('Employee') -> ondelete('cascade');
           
        // });
        // Schema::table('orders', function (Blueprint $table) {
        //     $table -> foreign('customerNumber')  -> refenence('customerNumber') -> on('customers')-> ondelete('cascade');
        // });
        // Schema::table('order_details', function (Blueprint $table) {
        //     $table -> foreign('order_number')  -> refenence('order_number') -> on('orders')-> ondelete('cascade');
        //     $table -> foreign('product_code')  -> refenence('product_code') -> on('products')-> ondelete('cascade'); 
            
        // });
        // Schema::table('products', function (Blueprint $table) {
        //     $table -> foreign('product_line')  -> refenence('productline') -> on('productlines')-> ondelete('cascade');
        // });
        // Schema::table('pre_orders', function (Blueprint $table) {
        //     $table -> foreign('order_number')  -> refenence('order_number') -> on('orders')-> ondelete('cascade');
        //     //$table -> foreign('order_code')  -> refenence('product_code') -> on('products');
        // });    
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