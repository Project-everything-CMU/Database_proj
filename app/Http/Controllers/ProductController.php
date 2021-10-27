<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    //
    public function   product(){
        $products= Product::all();
        return view('Product.product' ,compact('products'));

    
    }
    public function editProduct($id){

     
    $data =  product::find($id) ;
    return view('product.editProduct' , ['data' => $data]);    
     
            
    }

    public function updateProduct(Request $request ){

        //ตรวจสอบข้อมูล
        // $request->validate(
        //     [
        //         'department_name'=>'required|unique:departments|max:255'
        //     ],
        //     [
        //         'department_name.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
        //         'department_name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
        //         'department_name.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
        //     ]
        // );

        //return $request -> input() ; 
        $data = product::find($request->id) ;
        $data->product_code = $request-> product_code ; 
        $data->product_name = $request-> product_name ; 
        $data->product_line = $request-> product_line ; 
        $data->product_scale = $request-> product_scale ; 
        $data->product_vendor = $request-> product_vendor ; 
        $data->product_description = $request-> product_description ; 
        $data->quantity_instock = $request-> quantity_instock ; 
        $data->buy_price = $request-> buy_price ; 
        $data->MSRP = $request-> MSRP; 
        $data-> save() ;
        return redirect ('/product/all') ; 

        //return $request ->input();
        //dd($product_code);
        // $update = Product::find($product_code)->update([
        //     'product_code'=>$request->product_code,
        //    // 'user_id'=>Auth::user()->id
        // ]);
        // return redirect()->route('product')->with('success',"อัพเดตข้อมูลเรียบร้อย");
    }

  

    function  addProduct(Request $request){
        
            
        $request->validate(
            [
                'product_code'=>'required|max:255|unique:products',
                'product_name'=>'required|max:255'
            ],
            [
                'product_code.required'=>"กรุณากรอก product_code ด้วยครับ",
                'product_code.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_name.required'=>"กรุณากรอก product_name ด้วยครับ",
                'product_name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_line.required'=>"กรุณากรอก product_line ด้วยครับ",
                'product_line.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_scale.required'=>"กรุณากรอก product_scale ด้วยครับ",
                'product_scale.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_vendor.required'=>"กรุณากรอก product_vendor ด้วยครับ",
                'product_vendor.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_description.required'=>"กรุณากรอก product_description ด้วยครับ",
                'product_description.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_description.required'=>"กรุณากรอก product_description ด้วยครับ",
                'product_description.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'quantity_instock.required'=>"กรุณากรอก quantity_instock ด้วยครับ",
                'quantity_instock.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'buy_price.required'=>"กรุณากรอก buy_price ด้วยครับ",
                'buy_price.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'MSRP.required'=>"กรุณากรอก MSRP ด้วยครับ",
                'MSRP.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        //บันทึกข้อมูล
        $data = new Product ; 
        $data -> product_code = $request->product_code;
        $data -> product_name = $request->product_name;
        $data->product_line = $request->product_line;
        $data->product_scale = $request->product_scale;
        $data->product_vendor = $request->product_vendor;
        $data->product_description = $request->product_description;
        $data->quantity_instock = $request->quantity_instock;
        $data->buy_price = $request->buy_price;
        $data -> MSRP = $request->MSRP;
    
        $data -> save() ;
        //query builder


        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    public function deleteProduct($id){
        $delete= Product::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }

    public function softdelete($id){
        $delete = product::find($id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อย");
    }

    public function restore($id){
        $restore= product::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',"กู้คืนข้อมูลเรียบร้อย");
    }

    public function delete($id){
        $delete= product::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }


}
