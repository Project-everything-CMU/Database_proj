<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DepartmentController extends Controller
{
    //
    public function index(){
        $department = Department::all() ;
        return view('department/all' , compact('department'));
    }
    public function deleteDepartment($id){
        $delete= Department::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }
}
