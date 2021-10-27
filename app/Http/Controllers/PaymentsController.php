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
            $data = payments::all();
            return view('payment.payment' , compact('data')) ; 
    }

    public function addPayment(Request $request){
            $data = new payments ;
            $data -> customer_number = $request -> customer_number ;
            $data -> check_number = $request -> check_number ;
            $data -> payment_date = $request -> payment_date ;
            $data -> amount = $request -> amount ;
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
        $payment ->check_number = $request -> check_number ; 
        $payment -> payment_date = $request -> payment_date ;
        $payment -> amount = $request -> amount ; 
        $payment -> save() ;
        return view ('/payment.payment' , compact('data')) ; 
    }
}
