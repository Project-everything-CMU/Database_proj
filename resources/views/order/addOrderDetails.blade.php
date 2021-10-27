<div class = "card-header">แบบฟอร์ม</div>
                                <div class ="card-body">
                                <input type="hidden" name = "id" value = "{{$data -> id}}">
                                <form action="" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                        <label for="order_number">order_number</label>
                                            <input type="integer" class = "form-control" name = "order_number" value = "{{$data -> product_code }}">
                                            <label for="order_number">order_number</label>
                                            <input type="integer" class = "form-control" name = "order_number" >
                                            <label for="order_code">order_code</label>
                                            <input type="text" class = "form-control" name = "order_code">
                                            <label for="quantity_ordered">quantity_ordered</label>
                                            <input type="text" class = "form-control" name = "quantity_ordered">
                                            <label for="price_each">price_each</label>
                                            <input type="text" class = "form-control" name = "price_each">
                                            <label for="orderline_number">orderline_number</label>
                                            <input type="text" class = "form-control" name = "orderline_number">
                           
                                        

                                        </div>
                                       
                                        @error('customerNumber')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            
                                        @enderror
                                        <br>
                                        <input type="submit" value = บันทึก  class="btn btn-primary">
                                        
                                    </form>

                                </div>
                 </div>