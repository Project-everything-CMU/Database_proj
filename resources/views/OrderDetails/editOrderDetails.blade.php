

    <div class="py-12">
        <div class="max-w8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <center>
                <body>
                <br>
                EDIT ORDER DETAIL
                </body>
            </center>
        <div class="py-5">
            <div class = "container">
                <div class = "row ">
                    <table class="table">
                        <thead>
                        <form action="/orderDetails/update/" method ="post" >
                            @csrf

                            <input type="hidden" name = "id" value = "{{$data -> id}}">
                                    <div class = "form-group">
                                            <label for="order_number">order_number</label>
                                            <input type="integer" class = "form-control" name = "order_number" value ="{{$data ->order_number}}">
                                            <label for="product_code">product_code</label>
                                            <input type="integer" class = "form-control" name = "product_code" value ="{{$data ->product_code}}">
                                            <label for="quantity_ordered">quantity_ordered</label>
                                            <input type="integer" class = "form-control" name = "quantity_ordered" value ="{{$data ->quantity_ordered}}">
                                            <label for="price_each">price_each</label>
                                            <input type="integer" class = "form-control" name = "price_each" value ="{{$data->price_each}}">
                                            <label for="orderline_number">orderline_number</label>
                                            <input type="integer" class = "form-control" name = "orderline_number" value ="{{$data->orderline_number}}">
                                            
                                            @error('order_number')
                                                <div class="my-2">
                                                    <span class="text-danger">{{$message}}</span>
                                                </div>
                                            @enderror
                                            @error('product_code')
                                                <div class="my-2">
                                                    <span class="text-danger">{{$message}}</span>
                                                </div>
                                            @enderror
                                            @error('quantity_ordered')
                                                <div class="my-2">
                                                    <span class="text-danger">{{$message}}</span>
                                                </div>
                                            @enderror
                                            @error('price_each')
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


