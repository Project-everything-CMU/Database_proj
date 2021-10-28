<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <center>
                <body>
                <br>
                ORDER DETAIL
                </body>
            </center>
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header"><center><body>ตารางข้อมูล</body></div>
                            <table class="table">
                            <thead>
                                <tr>
                                    
                                                <th scope="col">No.</th>
                                                <th scope="col">order_number</th>
                                                <th scope="col">product_code</th>
                                                <th scope="col">quantity_ordered</th>
                                                <th scope="col">price_each</th>
                                            
                                    </tr>
                            </thead>
                                        <tbody>
                                            @foreach($orderDetails as $row)
                                            <tr>
                                                    
                                                <td>{{$row -> id}}</td>
                                                <td>{{$row -> order_number}}</td>
                                                <td>{{$row -> product_code}}</td>
                                                <td>{{$row -> quantity_ordered}}</td>
                                                <td>{{$row -> price_each}}</td>
                                                    <td>
                                                            <a href= {{url('/orderDetail/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                    <td>
                                                            <a href=  {{url('/orderDetails/delete/'.$row->id)}} class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                        
                                        </table>
                                        {{$orderDetails->links()}}
                                        </table>
                                                
                        </div>
                <div>
                    <div class = "col-md-15">
                            <div class = "card-header">แบบฟอร์ม</div>
                                <div class ="card-body">

                                    <form action="{{route('addOrderDetails')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            <label for="order_number">order_number</label>
                                            <input type="integer" class = "form-control" name = "order_number" >
                                            <label for="product_code">product_code</label>
                                            <input type="integer" class = "form-control" name = "product_code" value = "{{$product -> product_code}}" >
                                            <label for="quantity_ordered">quantity_ordered</label>
                                            <input type="integer" class = "form-control" name = "quantity_ordered">
                                            <label for="price_each">price_each</label>
                                            <input type="integer" class = "form-control" name = "price_each" value = "{{$product -> buy_price}}">
                                            <!-- <label for="orderline_number">orderline_number</label>
                                            <input type="integer" class = "form-control" name = "orderline_number"> -->
                                        </div>
                                       
                                        @error('order_number')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        @error('product_code')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        @error('quantity_ordered')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        @error('price_each')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        <br>
                                        <input type="submit" value = บันทึก  class="btn btn-primary">
                                        <a href= {{url('order/orderdetail')}} class="btn btn-primary">NEXT</a>
                                        
                                    </form>
                                   
                                </div>
                    </div>
     
            </div>
        </div>
    </div>
</x-app-layout>


