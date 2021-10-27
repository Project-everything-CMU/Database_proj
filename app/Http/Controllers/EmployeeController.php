<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    //
    public function  addEmployee(Request $request){

        
        $request->validate(
            [
                'firstname'=>'required|max:255',
                'lastname'=>'required|max:255'
            ],
            [
                'firstname.required'=>"กรุณากรอก firstname ด้วยครับ",
                'firstname.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'lastname.required'=>"กรุณากรอก lastname ด้วยครับ",
                'lastname.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'extention.required'=>"กรุณากรอก extention ด้วยครับ",
                'extention.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'email.required'=>"กรุณากรอก email ด้วยครับ",
                'email.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'password.required'=>"กรุณากรอก password ด้วยครับ",
                'password.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'officerCode.required'=>"กรุณากรอก officerCode ด้วยครับ",
                'officerCode.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'reportTo.required'=>"กรุณากรอก reportTo ด้วยครับ",
                'reportTo.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'jobTitle.required'=>"กรุณากรอก jobTitle ด้วยครับ",
                'jobTitle.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
        ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["firstname"] = $request->firstname;
        $data["lastname"] = $request->lastname;
        $data["extention"] = $request->extention;
        $data["email"] = $request->email;
        $data["password"] = Hash::make('$request->password');
        $data["officerCode"] = $request->officerCode;
        $data["reportTo"] = $request->reportTo;
        $data["jobTitle"] = $request->jobTitle;
       

        //query builder
        DB::table('employees')->insert($data);

        return view('Employee');
    }
    public function deleteEmployee($id){
        $delete= Employee::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
}
