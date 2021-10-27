<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            EDIT ADDRESS
        <div class="py-5">
            <div class = "container">
                <div class = "row ">
                    <table class="table">
                        <thead>
                        <form action="/Preorder/update/" method ="post" >
                            @csrf

                            <input type="hidden" name = "id" value = "{{$data -> id}}">
                                    <div class = "form-group">
                     
                                            <label for="orderNumber">orderNumber</label>
                                            <input type="integer" class = "form-control" name = "orderNumber" value ="{{$data ->orderNumber}}">
                                            <label for="productCode">productCode</label>
                                            <input type="integer" class = "form-control" name = "productCode" value ="{{$data ->productCode}}">
                                            <label for="preSale">preSale</label>
                                            <input type="double" class = "form-control" name = "preSale" value ="{{$data ->preSale}}">
                                            <label for="quantity">quantity</label>
                                            <input type="integer" class = "form-control" name = "quantity" value ="{{$data->quantity}}">
                                           
                                             @error('ordernumber')
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