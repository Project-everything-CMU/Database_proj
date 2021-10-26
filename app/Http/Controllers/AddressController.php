<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddressController extends Controller{
    function  address(){
        $address = address::all();

        return view('Address.address' ,compact('address'));

    }
    
    public function addAddress(Request $request){
        //dd($request->addr_ID);
        $request->validate(
            [
                'No'=>'required|max:255|',
                'customerNumber'=>'required|max:255|',
                
            ],
            [
                'customerNumber.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'customerNumber.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'No.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'No.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'addr_line_1.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'addr_line_1.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'city.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'city.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'state.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'state.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'postalcode.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'postalcode.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["customerNumber"] = $request->customerNumber;
        $data["No"] = $request->No;
        $data["addr_line_1"] = $request->addr_line_1;
        $data["addr_line_2"] = $request->addr_line_2;
        $data["city"] = $request->city;
        $data["state"] = $request->state;
        $data["postalcode"] = $request->postalcode;
     
       
        //query builder
        DB::table('addresses')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    public function editAddress($id){
        
        $data =  address::find($id) ;
        
        return view(('address.editAddress') , ['data' => $data]);
     
    }

    public function updateAddress(Request $request ){

        $data = address::find($request->id) ;
        $data->customerNumber = $request-> customerNumber ; 
        $data->No = $request-> No ;
        $data->addr_line_1 = $request-> addr_line_1 ; 
        $data->addr_line_2 = $request-> addr_line_2 ; 
        $data->city = $request-> city ; 
        $data->state = $request-> state ; 
        $data->postalcode = $request-> postalcode ; 
        $data-> save() ;
        return redirect ('/address/all') ; 

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