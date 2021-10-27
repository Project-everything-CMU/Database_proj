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
            EMPLOYEE 
            </body>
            </center>    
            
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header"><center><body>ตารางข้อมูล</body></center></div>

                        </div>
                    <div>
                    <div class = "col-md-12">
                            <div class = "card-header"><center><body>แบบฟอร์ม</body></center></div>
                                <div class ="card-body">

                                    <form action="{{route('addEmployee')}}" method ="post" >
                                        @csrf
                                        <div class = "form-group">
                                            <label for="firstname">ชื่อ</label>
                                            <input type="text" class = "form-control" name = "firstname">
                                            <label for="lastname">นามสกุล</label>
                                            <input type="text" class = "form-control" name = "lastname">
                                            <label for="extention">extention</label>
                                            <input type="text" class = "form-control" name = "extention">
                                            <label for="email">email</label>
                                            <input type="text" class = "form-control" name = "email">
                                            <label for="password">password</label>
                                            <input type="text" class = "form-control" name = "password">
                                            <label for="officerCode">officerCode</label>
                                            <input type="text" class = "form-control" name = "officerCode">
                                            <label for="reportTo">reportTo</label>
                                            <input type="text" class = "form-control" name = "reportTo">
                                            <label for="jobTitle">jobTitle</label>
                                            <input type="text" class = "form-control" name = "jobTitle">

                                        </div>
                                       
                                        <input type="submit" value = บันทึก  class="btn btn-primary">
                                    </form>

                                </div>
                    </div>
     
            </div>
        </div>
    </div>
</x-app-layout>


