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
            ADMIN
            </body>
            </center>
      <div class="py-12">
  
          
      <div class="py-8">
  

<div class = "container">
    <div class = "row ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">extention</th>
                    <th scope="col">officeCode</th>
                    <th scope="col">reportTo</th>
                    <th scope="col">jobTitle</th>
                    <th scope="col">Date</th>
                   
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $row)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$row -> name}}</td>
                    <td>{{$row -> firstname}}</td>
                    <td>{{$row -> lastname}}</td>
                    <td>{{$row -> email}}</td>
                    <td>{{$row -> extention}}</td>
                    <td>{{$row -> officeCode}}</td>
                    <td>{{$row -> reportTo}}</td>
                    <td>{{$row -> jobTitle}}</td>
                    <td>{{$row -> created_at}}</td>
                   
                    <td>
                        <a href= {{url('/user/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                    </td>
                    <td>
                        <a href= {{url('/user/delete/'.$row->id)}} class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
                   
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>
        </div>
    </div>
</x-app-layout>


