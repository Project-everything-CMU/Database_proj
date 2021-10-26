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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OfficesController extends Controller
{
    //
    public function  offices(){
        $offices = Offices::all();

        return view('offices.offices' ,compact('offices'));


    }
    
    public function addOffices(Request $request){
        $request->validate(
            [
                'office_code'=>'required|max:255|unique:offices',
            ],
            [
                'office_code.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'office_code.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'city.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'city.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'phone.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'phone.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'addr_line_1.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'addr_line_1.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'addr_line_2.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'addr_line_2.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'state.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'state.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'country.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'country.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'postalcode.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'postalcode.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'territory.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'territory.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["office_code"] = $request->office_code;
        $data["city"] = $request->city;
        $data["phone"] = $request->phone;
        $data["addr_line_1"] = $request->addr_line_1;
        $data["addr_line_2"] = $request->addr_line_2;
        $data["state"] = $request->state;
        $data["country"] = $request->country;
        $data["postalcode"] = $request->postalcode;
        $data["territory"] = $request->territory;
     
       
        //query builder
        DB::table('offices')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    public function editOffices($id){
     
        $data =  offices::find($id) ;
        return view('offices.editOffices' , ['data' => $data]);    
     
    }
    //ทำต่อ
    public function updateOffices(Request $request ){

        $data = offices::find($request->id) ;
        $data->office_code = $request-> office_code ; 
        $data->city = $request-> city ;
        $data->phone = $request-> phone ;
        $data->addr_line_1 = $request-> addr_line_1 ; 
        $data->addr_line_2 = $request-> addr_line_2 ; 
        $data->state = $request-> state ; 
        $data->country = $request-> country ; 
        $data->postalcode = $request-> postalcode ; 
        $data->territory = $request-> territory ; 
        $data-> save() ;
        return redirect ('/offices/all') ; 

    }

    public function deleteOffices($id){
        $delete= offices::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }

    public function softdelete($id){
        $delete = offices::find($id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อย");
    }

    public function restore($id){
        $restore= offices::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',"กู้คืนข้อมูลเรียบร้อย");
    }

    public function delete($id){
        $delete= offices::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
}
