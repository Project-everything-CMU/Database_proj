<div class = "card-header"><center><body>แบบฟอร์ม</body></div>
    <div class ="card-body">
                               
            <form action="" method ="post" >
             @csrf}}
                <div class = "form-group">
                    <!-- <label for="order_number">order_number</label>
                    <input type="integer" class = "form-control" name = "order_number" >
                    <label for="order_number">order_number</label>
                    <input type="integer" class = "form-control" name = "order_number" >
                    <label for="order_code">order_code</label>
                    <input type="text" class = "form-control" name = "order_code"> -->
                    <label for="quantity_ordered">quantity_ordered</label>
                    <input type="text" class = "form-control" name = "quantity_ordered">
                    <input type = "text" class = "form-control" name = "price" value = "{{$product -> buy_price}}" >            
                           
                                        

                </div>
                                       
                                        @error('order_number')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        @error('order_date')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        @error('required_date')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                                        @error('shipped_date')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                        @enderror
                        <br>
                <input type="submit" value = บันทึก  class="btn btn-primary">
                                        
            </form>

    </div>
</div>