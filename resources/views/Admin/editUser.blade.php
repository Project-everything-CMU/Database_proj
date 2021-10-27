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
            HELLO EDIT USER 
            </body>
            </center>
      <div class="py-12">
  
  
  

<div class = "container">
    <div class = "row ">
        <table class="table">
            <thead>
                
            <form action="/user/changerole/" method ="post" >
           @csrf
           <input type="hidden" name = "id" value = "{{$data -> id}}">
                <div class = "form-group">
                    <!-- <label for="status">status</label>
                    <input type="integer" class = "form-control" name = "status" value ="{{$data ->status}}">
                    <label for="firstname">firstname</label>
                    <input type="integer" class = "form-control" name = "firstname" value ="{{$data ->firstname}}">
                    <label for="lastname">lastname</label>
                    <input type="integer" class = "form-control" name = "status" value ="{{$data ->status}}">
                    -->
     
                    <label for="reportTo">reportTo</label> 
                    <input type="text" class = "form-control" name = "reportTo" value ="{{$data ->reportTo}}">
                    <label for="jobTitle">jobTitle</label> 
                    <input type="text" class = "form-control" name = "jobTitle" value ="{{$data ->jobTitle}}">
                                  
                           

                </div>
                @error('reportTo')
                        <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                        </div>
                @enderror
                @error('jobTitle')
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


