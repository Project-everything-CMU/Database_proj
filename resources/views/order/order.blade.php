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
                                                <th scope="col">order_date</th>
                                                <th scope="col">required_date</th>
                                                <th scope="col">shipped_date</th>
                                                <th scope="col">status</th>
                                                <th scope="col">comments</th>
                                                <th scope="col">customer_number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($order as $row)
                                                <tr>
                                                    
                                                    <td>{{$row -> order_number}}</td>
                                                    <td>{{$row -> order_date}}</td>
                                                    <td>{{$row -> required_date}}</td>
                                                    <td>{{$row -> shipped_date}}</td>
                                                    <td>{{$row -> status}}</td>
                                                    <td>{{$row -> comments}}</td>
                                                    <td>{{$row -> customer_number}}</td>
                                                    <td>
                                                         <a href= {{url('/order/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
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

                                    <form action="{{route('addOrder')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                        <label for="order_number">order_number</label>
                                            <input type="integer" class = "form-control" name = "order_number" >
                                            <label for="order_date">order_date</label>
                                            <input type="string" class = "form-control" name = "order_date">
                                            <label for="required_date">required_date</label>
                                            <input type="string" class = "form-control" name = "required_date">
                                            <label for="shipped_date">shipped_date</label>
                                            <input type="string" class = "form-control" name = "shipped_date">
                                            <label for="status">status</label>
                                            <input type="string" class = "form-control" name = "status">
                                            <label for="comments">comments</label>
                                            <input type="string" class = "form-control" name = "comments">
                                            <label for="customer_number">customer_number</label>
                                            <input type="integer" class = "form-control" name = "customer_number" >
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


