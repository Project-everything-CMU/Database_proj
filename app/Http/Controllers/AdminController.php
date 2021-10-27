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

class AdminController extends Controller
{
    public function index(){
            $users = User::all();
            //$user = Auth::user() -> name  ;
            return view('Admin.admin' ,compact('users'));
            // if($user== "EMANUEL"){
            
            // return view('Admin.admin' ,compact('users'));

            // }else {

            //     return view('/dashboard');

            // }



    }

    public function  buy($id){
 


    }


    public function deleteUser($id){
        $delete= Auth::user()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
   

    public function editUser($id){
    
    $user = Auth::user() -> id ;
    $data =  User::find($id) ;
    $name = $data -> id ; 
    if($user == $name  ){
        
        return view('admin.editUser' , compact('data'));    
              
     }else{

         dd("you not a who can change role") ;
     
        }

    }



   
    public function changeRole(Request $request){
        $users = User::all();
        $data = User::find($request->id) ;
        $data["reportTo"] = $request-> reportTo;
        $data["jobTitle"] = $request->jobTitle;
        
        $data-> save() ;

        return view('admin.admin' , compact('users'));
    }
    public function updateUser(Request $request ){

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
        $data = User::find($request->id) ;
      
        
        $data["firstname"] = $request-> firstname;
        $data["lastname"] = $request->lastname;
        $data["extention"] = $request-> extention;
        $data["officeCode"] = $request->officeCode;
        $data["phone_no"] = $request-> phone_no;
       
        $data-> save() ;
        return redirect ('/dashboard') ; 

        //return $request ->input();
        //dd($product_code);
        // $update = Product::find($product_code)->update([
        //     'product_code'=>$request->product_code,
        //    // 'user_id'=>Auth::user()->id
        // ]);
        // return redirect()->route('product')->with('success',"อัพเดตข้อมูลเรียบร้อย");
    }

   
    


    

    //
}
