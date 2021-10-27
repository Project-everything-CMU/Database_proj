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
                        <form action="/payment/update/" method ="post" >
                            @csrf

                            <input type="hidden" name = "id" value = "{{$data -> id}}">
                                    <div class = "form-group">
                                            <label for="customer_number">customer_number</label>
                                            <input type="integer" class = "form-control" name = "customer_number" value ="{{$data ->customer_number}}">
                                            <label for="check_number">check_number</label>
                                            <input type="string" class = "form-control" name = "check_number" value ="{{$data ->check_number}}">
                                            <label for="payment_date">payment_date</label>
                                            <input type="string" class = "form-control" name = "payment_date" value ="{{$data ->payment_date}}">
                                            <label for="amount">amount</label>
                                            <input type="string" class = "form-control" name = "amount" value ="{{$data->amount}}">
                                           
                                             @error('order_number')
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


