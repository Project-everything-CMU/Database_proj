<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                HELLO  ORDERDETAILES
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header">ตารางข้อมูล</div>
                                <div class = "container">
                                    <div class = "row ">
                                    <table class="table">
                                        
                                       
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">orderNumber</th>
                                                <th scope="col">product_code</th>
                                                <th scope="col">quantity_ordered</th>
                                                <th scope="col">PriceEach</th>
                                                <th scope="col">orderline_number</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{$row -> id}}</td>
                                                <td>{{$row -> order_code}}</td>
                                                <td>{{$row -> quantity_ordered}}</td>
                                                <td>{{$row -> price_each}}</td>
                                                <td>{{$row -> orderline_number}}</td>
                                                
                   
                                           
                                                    <td>
                                                            <a href= {{url('/customer/edit/'.$row->customerNumber)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                   
                                                </tr> 
                                                @endforeach
                                        
                                        </table>
                                        <form action=""  method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                           
                                            <label for="quantity_ordered">quantity_ordered</label>
                                            <input type="text" class = "form-control" name = "quantity_ordered">
                                          
                                            <label for="orderline_number">orderline_number</label>
                                            <input type="text" class = "form-control" name = "orderline_number">
                           

                                        </div>
                                       
                                        @error('customerNumber')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            
                                        @enderror
                                        <br>
                                        <input type="submit" value = บันทึก  class="btn btn-primary">
                                        
                                    </form>

                                    </table>

                                    </div>
                                </div>       
                        </div>
                <div>
                    <div class = "col-md-12">
            
     
            </div>
        </div>
    </div>
</x-app-layout>


