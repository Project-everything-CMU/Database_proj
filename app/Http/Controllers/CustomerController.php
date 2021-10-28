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
        return view('customer.editCustomer' , compact('data'));    

    }

    public function updateCustomer(Request $request){
        
       
        $data = customer::find($request->id) ;
        $data -> customerNumber = $request -> customerNumber;
        $data -> customerName = $request -> customerName;
        $data -> contactFirstName = $request -> contactFirstName;
        $data -> contactLastname = $request -> contactLastname; 
        $data -> Phone = $request -> Phone ; 
        $data -> AddressID = $request -> AddressID ;
        $data-> save() ;
        return redirect ('/customer/all') ; 
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
                    'customerNumber.required'=>"กรุณากรอก customerNumber ด้วยครับ",
                    'customerNumber.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'customerNumber.unique'=>"มี customerNumber นี้ในฐานข้อมูลแล้ว",
                    'customerName.required'=>"กรุณากรอก customerName ด้วยครับ",
                    'customerName.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'contactFirstName.required'=>"กรุณากรอก contactFirstName ด้วยครับ",
                    'contactFirstName.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'contactLastname.required'=>"กรุณากรอก contactLastname ด้วยครับ",
                    'contactLastname.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'Phone.required'=>"กรุณากรอก Phone ด้วยครับ",
                    'Phone.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'AddressID.required'=>"กรุณากรอก AddressID ด้วยครับ",
                    'AddressID.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                ]
            );
           $Customer = new customer ; 
           $Customer -> customerNumber = $request -> customerNumber ; 
           $Customer -> customerName = $request -> customerName ;
           $Customer -> contactFirstName = $request -> contactFirstName ; 
           $Customer -> contactLastname = $request ->contactLastname ; 
           $Customer -> Phone = $request -> Phone ;
           $Customer -> Addressid = $request -> AddressID ;	
           $Customer -> SaleRepEmployeeNumber =   $user ;
           
           $Customer -> save() ;
           return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
   }

   
   public function  customer(){
    $customer= Customer::paginate(4);

    return view('customer.customer' ,compact('customer'));

    }
    
    public function deleteCustomer($id){
        $delete= Customer::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
}
