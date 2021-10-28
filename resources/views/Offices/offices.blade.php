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
                OFFICES
                </body>
            </center>
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header"><center><body>ตารางข้อมูล</body></center></div>
                            <div class = "container">
                                <div class = "row ">
                                <div class = "center">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">office_code</th>
                                                <th scope="col">city</th>
                                                <th scope="col">phone</th>
                                                <th scope="col">addr_line_1</th>
                                                <th scope="col">addr_line_2</th>
                                                <th scope="col">state</th>
                                                <th scope="col">country</th>
                                                <th scope="col">postalcode</th>
                                                <th scope="col">territory</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($offices as $row)
                                                <tr>
                                                    <td>{{$row -> id}}</td>
                                                    <td>{{$row -> office_code}}</td>
                                                    <td>{{$row -> city}}</td>
                                                    <td>{{$row -> city}}</td>
                                                    <td>{{$row -> addr_line_1}}</td>
                                                    <td>{{$row -> addr_line_2}}</td>
                                                    <td>{{$row -> state}}</td>
                                                    <td>{{$row -> country}}</td>
                                                    <td>{{$row -> postalcode}}</td>
                                                    <td>{{$row -> territory}}</td>
                                                    <td>
                                                         <a href= {{url('/offices/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                    <td>
                                                            <a href=  {{url('/offices/delete/'.$row->id)}} class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                        </tbody>
                                        </table>
                                        {{$offices->links()}}
                                        <br>
                                        </div>
                                    </div>
                                    </div>

                                                
                        </div>
                <div>
                    <div class = "col-md-12">
                            <div class = "card-header"><center><body>แบบฟอร์ม</body></center></div>
                                <div class ="card-body">

                                    <form action="{{route('addOffices')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            
                                            <label for="office_code">office_code (ex: XXXXX)</label>
                                            <input type="integer" class = "form-control" name = "office_code" >
                                            <label for="phone">phone</label>
                                            <input type="integer" class = "form-control" name = "phone" >
                                            <label for="addr_line_1">addr_line_1</label>
                                            <input type="string" class = "form-control" name = "addr_line_1">
                                            <label for="addr_line_2">addr_line_2</label>
                                            <input type="string" class = "form-control" name = "addr_line_2">
                                            <label for="city">city</label>
                                            <input type="string" class = "form-control" name = "city" >
                                            <label for="state">state</label>
                                            <input type="string" class = "form-control" name = "state">
                                            <label for="country">country</label>
                                            <input type="string" class = "form-control" name = "country">
                                            <label for="postalcode">postalcode</label>
                                            <input type="integer" class = "form-control" name = "postalcode">
                                            <label for="territory">territory</label>
                                            <input type="string" class = "form-control" name = "territory">
                                        </div>
                                       
                                        @error('office_code')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('phone')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('addr_line_1')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('addr_line_2')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('city')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('state')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('country')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('postalcode')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            @enderror
                                            @error('territory')
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


