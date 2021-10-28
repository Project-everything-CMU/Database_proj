<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Payments;
use App\Models\Preorder;

class PreOrdercontroller extends Controller
{
     public function index () {
        $data = Preorder::paginate(4);
        return view('Preorder.Preorder' , compact('data')) ; 
    }
    public function addPreorder(Request $request){
        $request->validate(
            [
                'orderNumber'=>'required|max:255|',
            ],
            [
                'orderNumber.required'=>"กรุณากรอก orderNumber ด้วยครับ",
                'orderNumber.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'productCode.required'=>"กรุณากรอก productCode ด้วยครับ",
                'productCode.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'preSale.required'=>"กรุณากรอก preSale ด้วยครับ",
                'preSale.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'quantity.required'=>"กรุณากรอก quantity ด้วยครับ",
                'quantity.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        $data = new Preorder ;
        $data -> orderNumber = $request -> orderNumber ;
        $data -> productCode = $request -> productCode ;
        $data -> preSale = $request -> preSale ;
        $data -> quantity = $request -> quantity ;
        $data -> save() ;
        return redirect() -> back() ;
}
public function editPreorder($id){
        $data = Preorder::find($id) ; 
        return view('Preorder.edit', compact('data'));
} 

public function updatePreorder(Request $request){
    
    $data = Preorder::all();
    $Preorder= Preorder::find($request->id) ;
    $Preorder -> orderNumber = $request -> orderNumber ; 
    $Preorder ->productCode = $request -> productCode ; 
    $Preorder -> preSale = $request -> preSale ;
    $Preorder -> quantity = $request -> quantity ; 
    $Preorder -> save() ;
    return view ('/Preorder.Preorder' , compact('data')) ; 
}
    public function deletePreorder($id){
    $delete= Preorder::find($id) -> delete () ;
    return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
}
}


