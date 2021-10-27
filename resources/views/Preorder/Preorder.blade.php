<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                HELLO  Preorder
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header">ตารางข้อมูล</div>
                                <div class = "container">
                                    <div class = "row ">
                                        <table class="table">
                                        
                                       
                                        <thead>
                                            <tr>
                                            
        
                                                <th scope="col">No.</th>
                                                <th scope="col">orderNumber</th>
                                                <th scope="col">productCode</th>
                                                <th scope="col">preSale</th>
                                                <th scope="col">quantity</th>
                                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                                    
                                                <td>{{$row -> id}}</td>
                                                <td>{{$row -> orderNumber}}</td>
                                                <td>{{$row -> productCode}}</td>
                                                <td>{{$row -> preSale}}</td>
                                                <td>{{$row -> quantity}}</td>
                               
                                           
                                                    <td>
                                                            <a href= {{url('/Preorder/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                   
                                                </tr> 
                                                @endforeach
                                        
                                        </table>
                                        </table>
                                    </div>
                                </div>       
                        </div>
                <div>
                    <div class = "col-md-12">
                            <div class = "card-header">แบบฟอร์ม</div>
                                <div class ="card-body">

                                <form action="{{route('addPayment')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            <label for="customer_number">customer_number</label>
                                            <input type="integer" class = "form-control" name = "customer_number" >
                                            <label for="check_number">check_number</label>
                                            <input type="text" class = "form-control" name = "check_number">
                                            <label for="payment_date">payment_date</label>
                                            <input type="text" class = "form-control" name = "payment_date">
                                            <label for="amount">amount</label>
                                            <input type="text" class = "form-control" name = "amount">
                                  
                                        

                                        </div>
                                       
                                        @error('customerNumber')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            
                                        @enderror
                                        <br>
                                        <input type="submit" value = บันทึก  class="btn btn-primary">
                                        
                                    </form>

                                </div>
                 </div>
     
            </div>
        </div>
    </div>
</x-app-layout>