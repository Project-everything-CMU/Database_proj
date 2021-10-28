<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrdersController extends Controller
{
    public function  order(){
        $order = order::paginate(4);
        $customer = customer::all(); 
        $orderdetail = orderdetails::all(); 
        return view('Order.order' ,compact('order' , 'customer' , 'orderdetail'));
    }
    
    public function addOrder (Request $request){
        $request->validate(
            [
                'order_number'=>'required|max:255|',
            ],
            [
                'order_number.required'=>"กรุณากรอก order_number ด้วยครับ",
                'order_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'order_date.required'=>"กรุณากรอก order_date ด้วยครับ",
                'order_date.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'required_date.required'=>"กรุณากรอก required_date ด้วยครับ",
                'required_date.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'shipped_date.required'=>"กรุณากรอก shipped_date ด้วยครับ",
                'shipped_date.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'status.required'=>"กรุณากรอก status ด้วยครับ",
                'status.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'comments.required'=>"กรุณากรอก comments ด้วยครับ",
                'comments.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'customer_number.required'=>"กรุณากรอก customer_number ด้วยครับ",
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

    public function deleteOrder($id){
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
}
