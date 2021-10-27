<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrdersController extends Controller
{
    //
    public function index () {
        $data = Order::all();
        return $data  ; 
    }

    public function addOrder(Request $request , $id) {
            $order = Orderdetails::find($id) ; 
            $order_number = $order -> order_number ; 
            $customer = customer::find($request -> customer_number) ;
            
            $data = new Order  ;
            $data -> order_number = $order_number ; 
            $data -> orderDate = $request -> orderDate ;
            $data -> requiredDate = $request -> requiredDate ; 
            $data -> shippedData = $request -> shippedDate ; 
            $data -> status = $request -> status ; 
            $data -> comment = $request -> comment ; 
            $data -> customerNumber = $request ->customerNumber ; 
            return $data -> id ;
    }
}
