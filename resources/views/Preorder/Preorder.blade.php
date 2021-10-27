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
                PREORDER
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

                                <form action="{{route('addPreorder')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            <label for="orderNumber">orderNumber</label>
                                            <input type="integer" class = "form-control" name = "orderNumber" >
                                            <label for="productCode">productCode</label>
                                            <input type="text" class = "form-control" name = "productCode">
                                            <label for="preSale">preSale</label>
                                            <input type="text" class = "form-control" name = "preSale">
                                            <label for="quantity">quantity</label>
                                            <input type="text" class = "form-control" name = "quantity">
                                  
                                        

                                        </div>
                                       
                                        @error('orderNumber')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('productCode')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('preSale')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('quantity')
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