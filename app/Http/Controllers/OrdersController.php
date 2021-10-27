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
    public function  order(){
        $order = order::all();

        return view('Order.order' ,compact('orders'));
    }
    
    public function addOrder (Request $request){
        $request->validate(
            [
                'order_number'=>'required|max:255|',
            ],
            [
                'order_number.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'order_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_code.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'product_code.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'quantity_ordered.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'quantity_ordered.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'price_each.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'price_each.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'orderline_number.required'=>"กรุณาป้อนข้อมูลด้วยครับ",
                'orderline_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["order_number"] = $request->order_number;
        $data["product_code"] = $request->product_code;
        $data["quantity_ordered"] = $request->quantity_ordered;
        $data["price_each"] = $request->price_each;
        $data["orderline_number"] = $request->orderline_number;
     
       
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
        $data->product_code = $request-> product_code ;
        $data->quantity_ordered = $request-> quantity_ordered ;
        $data->price_each = $request-> price_each ; 
        $data->orderline_number = $request-> orderline_number ; 
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

    public function delete($id){
        $delete= Order::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
}
