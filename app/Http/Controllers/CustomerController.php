<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller
{

    public function editCustomer($id){
        $data =  customer::find($id) ;
        return view('customer.editProduct' , ['data' => $data]);    

    }

    public function updateCustomer(Request $request){


        $data = customer::find($request->id) ;
        $data-> save() ;
        return view ('/customer.customer') ; 
    }
    //
    public function  addCustomer(Request $request){
          
    $user = Auth::user() -> id ;
    $customer = Customer::all() ;
       //บันทึกข้อมูล
    $request->validate(
                [
                    'customerNumber'=>'required|unique:customers|max:255'
                ],
                [
                    'customerNumber.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
                    'customerNumber.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'customerNumber.unique'=>"มี customerNumber นี้ในฐานข้อมูลแล้ว"
                ]
            );
           $Customer = new customer ; 
           $Customer -> customerNumber = $request -> customerNumber ; 
           $Customer -> customerName = $request -> customerName ;
           $Customer -> contactLastname = $request ->contactLastname ; 
           $Customer -> contactFirstname = $request -> contactFirstname ; 
           $Customer -> phone = $request -> phone ;
           $Customer -> Addressid = $request -> AddressID ;
           $Customer -> SaleRepEmployeeNumber =   $user ;
           
           $Customer -> save() ;
           return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
   }

   
   public function  customer(){
    $customer= Customer::all();

    return view('customer.customer' ,compact('customer'));

    }
    
    public function deleteCustomer($id){
        $delete= Customer::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
}
