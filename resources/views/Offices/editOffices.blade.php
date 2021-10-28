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
                EDIT OFFICES
                </body>
            </center>
            
        <div class="py-5">
            <div class = "container">
                <div class = "row ">
                    <table class="table">
                        <thead>
                        <form action="/offices/update/" method ="post" >
                            @csrf

                            <input type="hidden" name = "id" value = "{{$data -> id}}">
                                    <div class = "form-group">
                                                <label for="office_code">office_code (ex: XXXXX)</label>
                                                <input type="integer" class = "form-control" name = "office_code" value ="{{$data ->office_code}}">
                                                <label for="phone">phone</label>
                                                <input type="string" class = "form-control" name = "phone" value ="{{$data ->phone}}">
                                                <label for="addr_line_1">addr_line_1</label>
                                                <input type="string" class = "form-control" name = "addr_line_1" value ="{{$data->addr_line_1}}">
                                                <label for="addr_line_2">addr_line_2</label>
                                                <input type="string" class = "form-control" name = "addr_line_2" value ="{{$data->addr_line_2}}">
                                                <label for="city">city</label>
                                                <input type="string" class = "form-control" name = "city" value ="{{$data->city}}">
                                                <label for="state">state</label>
                                                <input type="string" class = "form-control" name = "state" value ="{{$data->state}}">
                                                <label for="country">country</label>
                                                <input type="string" class = "form-control" name = "country" value ="{{$data->country}}">
                                                <label for="postalcode">postalcode</label>
                                                <input type="integer" class = "form-control" name = "postalcode" value ="{{$data->postalcode}}">
                                                <label for="territory">territory</label>
                                                <input type="string" class = "form-control" name = "territory" value ="{{$data->territory}}">
                                                <br>
                                            
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
                                                
                                                <input type="submit" value = อัพเดท  class="btn btn-primary">
                            </form>
                            </table>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>


