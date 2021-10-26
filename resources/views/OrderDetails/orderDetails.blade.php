<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                กรุณากรอกข้อมูล
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header">ตารางข้อมูล</div>
                            <div class = "container">
                                <div class = "row ">
                                <div class = "center">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">order_number</th>
                                                <th scope="col">product_code</th>
                                                <th scope="col">quantity_ordered</th>
                                                <th scope="col">price_each</th>
                                                <th scope="col">orderline_number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($orderDetails as $row)
                                                <tr>
                                                    
                                                    <td>{{$row -> order_number}}</td>
                                                    <td>{{$row -> product_code}}</td>
                                                    <td>{{$row -> quantity_ordered}}</td>
                                                    <td>{{$row -> price_each}}</td>
                                                    <td>{{$row -> orderline_number}}</td>
                                                    <td>
                                                         <a href= {{url('/orderDetails/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                        </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    </div>
                                    

                                                
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
                                            <input type="integer" class = "form-control" name = "product_code" >
                                            <label for="quantity_ordered">quantity_ordered</label>
                                            <input type="integer" class = "form-control" name = "quantity_ordered">
                                            <label for="price_each">price_each</label>
                                            <input type="integer" class = "form-control" name = "price_each">
                                            <label for="orderline_number">orderline_number</label>
                                            <input type="integer" class = "form-control" name = "orderline_number">
                                        </div>
                                       
                                        @error('order_number')
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


