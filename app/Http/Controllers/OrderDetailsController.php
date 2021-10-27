<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Address;
use App\Models\offices;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrderDetailsController extends Controller
{

    // public function index($id){
    //     $product = product::find($id);
    //    return view('order.addOrderDetails' , compact('product'));  
    // }

    public function  orderDetails(){
        $orderDetails = orderDetails::all();

        return view('OrderDetails.orderDetails' ,compact('orderDetails'));


    }
    
    public function addOrderDetails(Request $request ){
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
        DB::table('order_details')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    public function editOrderDetails($id){
     
        $data =  OrderDetails::find($id) ;
        return view('OrderDetails.editOrderDetails' , ['data' => $data]);    
     
    }
    //ทำต่อ
    public function updateOrderDetails(Request $request ){

        $data = orderDetails::find($request->id) ;
        $data->order_number = $request-> order_number ; 
        $data->product_code = $request-> product_code ;
        $data->quantity_ordered = $request-> quantity_ordered ;
        $data->price_each = $request-> price_each ; 
        $data->orderline_number = $request-> orderline_number ; 
        $data-> save() ;
        return redirect ('/orderDetails/all') ; 

    }

    public function editDetailsbyOrder(Request $request,$id ){
        $productcode_price = DB::select(DB::raw("
        SELECT product_code,buy_price FROM products WHERE products.id = $id "));
        return $productcode_price; 
        //dd($productcode);
    }

    public function updateOrderbyDetails(Request $request ){

        $data = orderDetails::find($request->id) ;
        $data->order_number = $request-> order_number ; 
        $data->product_code = $request-> product_code ;
        $data->quantity_ordered = $request-> quantity_ordered ;
        $data->price_each = $request-> price_each ; 
        $data->orderline_number = $request-> orderline_number ; 
        $data-> save() ;
        return redirect ('/orderbyDetails/all') ; 

    }

    public function deleteOrderDetails($id){
        $delete= OrderDetails::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }

    public function softOrderDetails($id){
        $delete = OrderDetails::find($id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อย");
    }

    public function restore($id){
        $restore= OrderDetails::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',"กู้คืนข้อมูลเรียบร้อย");
    }

    public function delete($id){
        $delete= OrderDetails::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
}
