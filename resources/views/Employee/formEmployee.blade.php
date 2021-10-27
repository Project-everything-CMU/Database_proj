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
                            <div class = "container">
                                <div class = "row ">
                                    <table class="table">
                                        <thead>
                                            
                                        </thead>
                                        
                                        </table>
                                        </div>
                                    </div>

                                                
                        </div>
                <div>
                    <div class = "col-md-12">
                            <div class = "card-header"><center><body>แบบฟอร์ม</body></center></div>
                                <div class ="card-body">

                            <form action="" method ="post" >
                        @csrf
                        <input type="hidden" name = "id" value = "">
                                <div class = "form-group">
                                    <label for="firstname">firstname</label>
                                    <input type="text" class = "form-control" name = "firstname" value ="">
                                    <label for="lastname">lastname</label>
                                    <input type="text" class = "form-control" name = "lastname" value ="">
                                    <label for="extention">extention</label>
                                    <input type="text" class = "form-control" name = "extention" value ="">
                                    <label for="officeCode">officeCode</label>
                                    <input type="text" class = "form-control" name = "officeCode" value ="">
                                    <label for="reportTo">reportTo</label>
                                    <input type="text" class = "form-control" name = "extention" value ="">
                                    <label for="jobTitle">jobTitle</label>
                                    <input type="text" class = "form-control" name = "jobTitle" value ="">
                                </div>
                                @error('firstname')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
                                    @error('lastname')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
                                    @error('extention')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
                                    @error('officeCode')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
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

                     </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
