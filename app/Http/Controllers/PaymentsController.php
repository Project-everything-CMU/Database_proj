<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Payments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PaymentsController extends Controller
{
    //
    public function index () {
            $data = payments::paginate(4);
            return view('payment.payment' , compact('data')) ; 
    }

    public function addPayment(Request $request){
      
        $request->validate(
                [
                    'customer_number'=>'required|max:255|',
                ],
                [
                    'customer_number.required'=>"กรุณากรอก customer_number ด้วยครับ",
                    'customer_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'check_number.required'=>"กรุณากรอก check_number ด้วยครับ",
                    'check_number.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'payment_date.required'=>"กรุณากรอก payment_date ด้วยครับ",
                    'payment_date.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                    'amount.required'=>"กรุณากรอก amount ด้วยครับ",
                    'amount.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                ]
            );
            //บันทึก

            $data = new payments ;
            $data -> customer_number = $request -> customer_number ;
            $allamount = DB::table('orderDetails') -> where('customerNumber' , '{{$data -> customer_number}}');
            $data -> check_number = $request -> check_number ;
            $data -> payment_date = $request -> payment_date ;
            $data -> amount = $request -> amount ;
            ($allamount) ; 
            $data -> save() ;
           return redirect() -> back() ;
    }
    public function editPayment($id){
            $data = payments::find($id) ; 
            return view('payment.edit', compact('data'));
    } 

    public function updatePayment(Request $request){

        $data = payments::all();
        $payment= payments::find($request->id) ;
        $payment -> customer_number = $request -> customer_number ; 
        $payment -> check_number = $request -> check_number ; 
        $payment -> payment_date = $request -> payment_date ;
        $payment -> amount = $request -> amount ; 
        $payment -> save() ;
        return view ('/payment.payment' , compact('data')) ; 
    }

    public function deletePayment($id){
        $delete=  payments::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
    }

}
