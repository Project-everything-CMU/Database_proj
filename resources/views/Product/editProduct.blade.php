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
                EDIT PRODUCT
                </body>
            </center>
      <div class="py-12">
  
          
      <div class="py-12">
  

<div class = "container">
    <div class = "row ">
        <table class="table">
            <thead>
                
            <form action="/product/update/" method ="post" >
           @csrf
           <input type="hidden" name = "id" value = "{{$data -> id}}">
                <div class = "form-group">
                      <label for="product_code">product_code</label>
                            <input type="integer" class = "form-control" name = "product_code" value ="{{$data ->product_code}}">
                            <label for="product_name">product_name</label>
                            <input type="text" class = "form-control" name = "product_name" value ="{{$data ->product_name}}">
                            <label for="product_line">product_line</label>
                            <input type="text" class = "form-control" name = "product_line" value ="{{$data->product_line}}">
                            <label for="product_scale">product_scale</label>
                            <input type="text" class = "form-control" name = "product_scale" value ="{{$data->product_scale}}">
                            <label for="product_vendor">product_vendor</label>
                            <input type="text" class = "form-control" name = "product_vendor" value ="{{$data->product_vendor}}">
                            <label for="product_description">product_description</label>
                            <input type="text" class = "form-control" name = "product_description" value ="{{$data->product_description}}">
                            <label for="quantity_instock">quantity_instock</label>
                            <input type="integer" class = "form-control" name = "quantity_instock" value ="{{$data->quantity_instock}}">
                            <label for="buy_price">buy_price</label>
                            <input type="integer" class = "form-control" name = "buy_price" value ="{{$data->buy_price}}">
                            <label for="MSRP">MSRP</label>
                            <input type="integer" class = "form-control" name = "MSRP" value ="{{$data->MSRP}}">
                            <br>
                                       
                            @error('product_code')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('product_name')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('product_line')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('product_scale')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('product_vendor')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('product_description')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('quantity_instock')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('buy_price')
                                <div class="my-2">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                                @error('MSRP')
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


