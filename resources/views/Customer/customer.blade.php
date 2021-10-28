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
                HELLO  CUSTOMER
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
                                                <th scope="col">customerName</th>
                                                <th scope="col">customerFirstname</th>
                                                <th scope="col">customerLastname</th>
                                                <th scope="col">phone</th>
                                                <th scope="col">AddressID</th>
                                                <th scope="col">SaleRepEmployeeNumber</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($customer as $row)
                                            <tr>
                                                <td>{{$row -> id}}</td>    
                                                <td>{{$row -> customerNumber}}</td>
                                                <td>{{$row -> customerName}}</td>
                                                <td>{{$row -> contactFirstName}}</td>
                                                <td>{{$row -> contactLastname}}</td>
                                                <td>{{$row -> Phone}}</td>
                                                <td>{{$row -> AddressID}}</td>
                                                <td>{{$row -> SaleRepEmployeeNumber}}</td>
                                           
                                                    <td>
                                                            <a href= {{url('/customer/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                    <td>
                                                            <a href=  {{url('customer/delete/'.$row->id)}} class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                        
                                        </table>
                                        {{$customer->links()}}
                                        </table>
                                    </div>
                                </div>       
                        </div>
                <div>
                    <div class = "col-md-12">
                            <div class = "card-header"><center><body>แบบฟอร์ม</body></center></div>
                                <div class ="card-body">

                                <form action="{{route('addCustomer')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            <label for="customerNumber">customerNumber (ex: XXXXX)</label>
                                            <input type="integer" class = "form-control" name = "customerNumber" >
                                            <label for="customerName">customerName</label>
                                            <input type="text" class = "form-control" name = "customerName">
                                            <label for="contactFirstName">contactFirstName</label>
                                            <input type="text" class = "form-control" name = "contactFirstName">
                                            <label for="contactLastname">contactLastname</label>
                                            <input type="text" class = "form-control" name = "contactLastname">
                                            <label for="Phone">Phone</label>
                                            <input type="text" class = "form-control" name = "Phone">
                                            <label for="AddressID">AddressID</label>
                                            <input type="text" class = "form-control" name = "AddressID">
                                        

                                        </div>		
                                        
                                        @error('customerNumber')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('customerName')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('contactFirstName')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('contactLastname')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('Phone')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('AddressID')
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


