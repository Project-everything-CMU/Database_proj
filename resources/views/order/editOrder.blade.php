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
                        <form action="/order/update/" method ="post" >
                            @csrf

                            <input type="hidden" name = "id" value = "{{$data -> id}}">
                                    <div class = "form-group">
                                    <label for="order_number">order_number</label>
                                            <input type="integer" class = "form-control" name = "order_number" value ="{{$data ->order_number}}">
                                            <label for="order_date">order_date</label>
                                            <input type="string" class = "form-control" name = "order_date" value ="{{$data ->order_date}}">
                                            <label for="required_date">required_date</label>
                                            <input type="string" class = "form-control" name = "required_date" value ="{{$data ->required_date}}">
                                            <label for="shipped_date">shipped_date</label>
                                            <input type="string" class = "form-control" name = "shipped_date" value ="{{$data->shipped_date}}">
                                            <label for="status">status</label>
                                            <input type="string" class = "form-control" name = "status" value ="{{$data ->status}}">
                                            <label for="comments">comments</label>
                                            <input type="string" class = "form-control" name = "comments" value ="{{$data->comments}}">
                                            <label for="customer_number">customer_number</label>
                                            <input type="integer" class = "form-control" name = "customer_number" value ="{{$data->customer_number}}">
                                            
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


