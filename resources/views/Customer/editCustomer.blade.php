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
                EDIT CUSTOMER
                </body>
            </center>
            
      <div class="py-12">
  
          
      <div class="py-12">
  

<div class = "container">
    <div class = "row ">
        <table class="table">
            <thead>
                
            <form action="/customer/update/" method ="post" >
           @csrf
           <input type="hidden" name = "id" value = "{{$data -> id}}">
                <div class = "form-group">
                            <label for="customerNumber">customerNumber (ex: XXXXX)</label>
                            <input type="integer" class = "form-control" name = "customerNumber" value ="{{$data ->customerNumber}}">
                            <label for="customerName">customerName</label>
                            <input type="text" class = "form-control" name = "customerName" value ="{{$data ->customerName}}">
                            <label for="contactFirstName">contactFirstName</label>
                            <input type="text" class = "form-control" name = "contactFirstName" value ="{{$data->contactFirstName}}">
                            <label for="contactLastname">contactLastname</label>
                            <input type="text" class = "form-control" name = "contactLastname" value ="{{$data->contactLastname}}">
                            <label for="Phone">Phone</label>
                            <input type="text" class = "form-control" name = "Phone" value ="{{$data->Phone}}">
                            <label for="AddressID">AddressID</label>
                            <input type="text" class = "form-control" name = "AddressID" value ="{{$data->AddressID}}">
                            <br>
                            
                           
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
                 <input type="submit" value = อัพเดท  class="btn btn-primary">
            </form>
        </table>
    </div>
</div>

</div>
        </div>
    </div>
</x-app-layout>


