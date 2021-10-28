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
                                      
                                        </table>
                                                
                        </div>
                <div>
                  
            </div>
        </div>
    </div>
</x-app-layout>


