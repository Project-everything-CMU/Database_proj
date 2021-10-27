<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreOrdercontroller extends Controller
{
     public function index () {
        $data = Preorder::all();
        return view('Preorder.Preorder' , compact('data')) ; 
    }
    public function addPreorder(Request $request){
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
    $payment= Preorder::find($request->id) ;
    $payment -> orderNumber = $request -> orderNumber ; 
    $payment ->productCode = $request -> productCode ; 
    $payment -> preSale = $request -> preSale ;
    $payment -> quantity = $request -> quantity ; 
    $payment -> save() ;
    return view ('/Preorder.Preorder' , compact('data')) ; 
}
}

}
