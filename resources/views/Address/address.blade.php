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
                                                <th scope="col">addr_ID</th>
                                                <th scope="col">No</th>
                                                <th scope="col">addr_line_1</th>
                                                <th scope="col">addr_line_2</th>
                                                <th scope="col">city</th>
                                                <th scope="col">state</th>
                                                <th scope="col">postalcode</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($address as $row)
                                                <tr>
                                                    
                                                    <td>{{$row -> addr_ID}}</td>
                                                    <td>{{$row -> No}}</td>
                                                    <td>{{$row -> addr_line_1}}</td>
                                                    <td>{{$row -> addr_line_2}}</td>
                                                    <td>{{$row -> city}}</td>
                                                    <td>{{$row -> state}}</td>
                                                    <td>{{$row -> postalcode}}</td>
                                                    <td>
                                                         <a href= {{url('/address/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
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

                                    <form action="{{route('addAddress')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            <label for="addr_ID">addr_ID</label>
                                            <input type="integer" class = "form-control" name = "addr_ID" >
                                            <label for="No">No</label>
                                            <input type="integer" class = "form-control" name = "No" >
                                            <label for="addr_line_1">addr_line_1</label>
                                            <input type="string" class = "form-control" name = "addr_line_1">
                                            <label for="addr_line_2">addr_line_2</label>
                                            <input type="string" class = "form-control" name = "addr_line_2">
                                            <label for="city">city</label>
                                            <input type="string" class = "form-control" name = "city">
                                            <label for="state">state</label>
                                            <input type="string" class = "form-control" name = "state">
                                            <label for="postalcode">postalcode</label>
                                            <input type="integer" class = "form-control" name = "postalcode">
                                        </div>
                                       
                                        @error('addr_ID')
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


