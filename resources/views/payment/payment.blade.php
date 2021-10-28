<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <center>
                <body>
                <br>
                PAYMENT
                </body>
            </center>
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header"><center><body>ตารางข้อมูล</body></center></div>
                                <div class = "container">
                                    <div class = "row ">
                                        <table class="table">
                                        
                                       
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">customerNumber</th>
                                                <th scope="col">checkNumber</th>
                                                <th scope="col">payment_Date</th>
                                                <th scope="col">amount</th>
                                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                                    
                                                <td>{{$row -> id}}</td>
                                                <td>{{$row -> customer_number}}</td>
                                                <td>{{$row -> check_number}}</td>
                                                <td>{{$row -> payment_date}}</td>
                                                <td>{{$row -> amount}}</td>
                               
                                           
                                                    <td>
                                                            <a href= {{url('/payment/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                    <td>
                                                            <a href=  {{url('/payment/delete/'.$row->id)}} class="btn btn-danger">Delete</a>
                                                    </td>
                                                   
                                                </tr> 
                                                @endforeach
                                        
                                        </table>
                                        {{$data->links()}}
                                        <br>
                                        </table>
                                    </div>
                                </div>       
                        </div>
                <div>
                    <div class = "col-md-12">
                            <div class = "card-header"><center><body>แบบฟอร์ม</body></center></div>
                                <div class ="card-body">

                                <form action="{{route('addPayment')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            <label for="customer_number">customer_number (ex: XXXXX)</label>
                                            <input type="integer" class = "form-control" name = "customer_number" >
                                            <label for="check_number">check_number</label>
                                            <input type="text" class = "form-control" name = "check_number">
                                            <label for="payment_date">payment_date</label>
                                            <input type="text" class = "form-control" name = "payment_date">
                                            <label for="amount">amount</label>
                                            <input type="text" class = "form-control" name = "amount">
                                  
                                        

                                        </div>
                                       
                                        @error('customer_number')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('check_number')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('addr_line_1')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('payment_date')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('amount')
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


