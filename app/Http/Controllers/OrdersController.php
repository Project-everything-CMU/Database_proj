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
<<<<<<< HEAD
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

    public function deleteOrder($id){
        $delete= Order::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
=======
    public function  order(){
        $order = order::all();

        return view('Order.order' ,compact('order'));
    }
    
    public function addOrder (Request $request){
        $request->validate(
            [
                'order_number'=>'required|max:255|',
            ],
            [
                'order_number.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'order_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'order_date.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'order_date.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'required_date.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'required_date.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'shipped_date.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'shipped_date.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'status.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'status.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'comments.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'comments.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'customer_number.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'customer_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["order_number"] = $request->order_number;
        $data["order_date"] = $request->order_date;
        $data["required_date"] = $request->required_date;
        $data["shipped_date"] = $request->shipped_date;
        $data["status"] = $request->status;
        $data["comments"] = $request->comments;
        $data["customer_number"] = $request->customer_number;
     
       
        //query builder
        DB::table('orders')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    public function editOrder($id){
     
        $data =  Order::find($id) ;
        return view('Order.editOrder' , ['data' => $data]);    
     
    }
    //ทำต่อ
    public function updateOrder(Request $request ){

        $data = order::find($request->id) ;
        $data->order_number = $request-> order_number ; 
        $data->order_date = $request-> order_date ;
        $data->required_date = $request-> required_date ; 
        $data->shipped_date = $request-> shipped_date ;
        $data->status = $request-> status ;
        $data->comments = $request-> comments ; 
        $data->customer_number = $request-> customer_number ; 
        $data-> save() ;
        return redirect ('/order/all') ; 

    }

    public function delete($id){
        $delete= Order::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }

    public function soft($id){
        $delete = Order::find($id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อย");
    }

    public function restore($id){
        $restore= Order::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',"กู้คืนข้อมูลเรียบร้อย");
    }

    // public function delete($id){
    //     $delete= Order::onlyTrashed()->find($id)->forceDelete();
    //     return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    // }
>>>>>>> 03a4f2f745187368f60995ee6500ada7fa722f92
}
