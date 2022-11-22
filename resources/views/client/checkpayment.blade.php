@extends('indexfull_layout')
@section('client_content')

        <div class="app__container">
            <div class="grid">
                <div class="row">
                    <div class="col-9">
                        <div class="container__cart">
                            <div class="cart__attributes cart__box">
                                <div class="cart__showing">
                                    <p class="cart__attribute cart--flex4">Sản phẩm</p>
                                    <p class="cart__attribute cart--flex3">Đơn giá</p>
                                    <p class="cart__attribute cart--flex2">Số lượng</p>
                                    <p class="cart__attribute cart--flex2">Thành tiền</p>
                                    <i class="cart__attribute fa-regular fa-trash"></i>
                                </div>

                            </div>
                            <?php
                            $content = Cart::content();
                         //    echo'<pre>';
                         //    print_r($content);
                         //    echo'</pre>';
                            ?>
                           
                            @foreach($content as $v_content)
                            <div class="cart__items cart__box">
                                <!-- <div class="cart__showing"> -->
                                  
                                    <div class="cart__item cart__showing ">


                                       
                                        <div class="cart-item__product cart--flex4">
                                            <div class="cart-item__imgbox">
                                                <img class="cart-item__img" src="{{URL::to('./frontend/img/products/'.$v_content->options->image)}}" alt="" width="60">
                                            </div>
    
                                            <div class="cart-item__info">
                                                <h2 class="cart-item__title">{{$v_content->name}}</h2>
                                                {{-- <div class="cart-item__box">
                                                    <span>Tác giả:</span>
                                                    <p class="cart-item__author">{{$v_content->weight}}</p>
                                                </div> --}}
                                                {{-- <div class="cart-item__box">
                                                    <span>Loại:</span>
                                                    <p class="cart-item__type">Sách</p>
                                                </div> --}}
                                            </div>
                                        </div>

                                     
                                            <div class="cart-item__price cart--flex3">
                                                <p class="cart-item__lastprice">{{number_format($v_content->price).' '.'vnđ'}}</p>
                                                {{-- <p class="cart-item__lastprice">102,000 đ</p>
                                                <p class="cart-item__originprice">120,000 đ</p> --}}
                                            </div>
                                   
                                            <div class="cart-item__quantity cart--flex2 quantity">
                                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                            
                                                {{-- <button class="quantify-down cart-item__down cart-item__btn">-</button> --}}
                                                <input class="cart_quantity_input" type="number" max="5" min="1" name="cart_quantity" value="{{$v_content->qty}}"  disabled>
                                                {{-- <button class="quantify-up cart-item__up cart-item__btn">cập nhật</button> --}}
                                              
                                            </div> 
                                      
                                            <p class="cart-item__total cart--flex2"><?php
                                                $subtotal = $v_content->price * $v_content->qty;
                                                echo number_format($subtotal).' '.'vnđ';
                                                ?></p>
                                            <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="cart-item__icon fa-regular fa-trash"></i></a>
                                       
                                       

                                    </div>
                                   
                                <!-- </div> -->
                            </div>
                            @endforeach
                        
                            {{-- <div class="cart__items cart__box payment-check__container">
                                @php
                                    // $fullname = $_GET['shipping_name'];
                                    // $email = $_GET['shipping_email'];
                                    // $addr = $_GET['shipping_address'];
                                    // $phone = $_GET['shipping_phone'];

                                    $fullname = "";
                                    $email = "";
                                    $addr = "";
                                    $phone = "";
                                    
                                @endphp
                                @php
                                  $shipping_id = Session::get('shipping_id');
                                  $shipping_name = Session::get('shipping_name');
                                  $shipping_email = Session::get('shipping_email');
                                  $shipping_address = Session::get('shipping_address');
                                  $shipping_phone = Session::get('shipping_phone');
                                 @endphp
                                <h3 class="pay__heading payment-check__heading">Thông tin giao hàng</h3>
                
                                <div class="pay__group payment-check__group">
                                    <label for="fullname" class="pay-group__label">Họ tên</label>
                                    <p class="pay-group__input ">{{ $shipping_name }}</p>
                                </div>
                
                                                
                                <div class="pay__group payment-check__group">
                                    <label for="email" class="pay-group__label">Email nhận hàng</label>
                                    <p class="pay-group__input"> $shipping_email</p>
                                </div>
                
                                <div class="pay__group payment-check__group">
                                    <label for="address" class="pay-group__label">Địa chỉ</label>
                                    <p  class="pay-group__input">{{$addr}}</p>
                                </div>
                
                                <div class="pay__group payment-check__group">
                                    <label for="phone" class="pay-group__label">Số điện thoại</label>
                                    <p  class="pay-group__input" >{{$phone}}</p>
                                </div>
                           
                            </div> --}}
                            
                        </div>
                    </div>
                    
                    <div class="col-3">
                        <div class="cart__prices cart__box">
                            <div class="cart__prices cart__box">
                                <div class="cart-prices__box">
                                    <span>Thue</span>
                                    <p class="cart-prices__before">{{Cart::tax().' '.'vnđ'}}</p>
                                </div>

                                <div class="cart-prices__box">
                                    <span>Tổng tiền</span>
                                    <p class="cart-prices__after">{{Cart::total().' '.'vnđ'}}</p>
                                </div>
                            </div>
                        </div>

                        <form method="POST" action="{{URL::to('/order_save')}}">
                            @csrf
                            <div class="cart__payment">
                                <div class="cart__promotion cart__box cart__payment-method">
                                    <h2 class="cart-promotion__title payment-method__title">Phương thức thanh toán</h2>
                                    <div class="cart-promotion__box">
                                        <div class="promotion__group">
                                            <input type="radio" id="vat" name="payment_method" value="1" checked>
                                            <label for="vat">Thanh toán khi nhận hàng</label>
                                        </div>
                                        {{-- <div class="promotion__group">
                                            <input type="radio" id="card" name="payment_method" value="2">
                                            <label for="card">Thanh toán bằng thẻ</label>
                                        </div>
                                        <div class="promotion__group">
                                            <input type="radio" id="digi" name="payment_method" value="3">
                                            <label for="digi">Thanh toán bằng ví điện tử</label>
                                        </div> --}}
                                        
                                        
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="cart__box">
                                    <a href="{{URL::to('/payment')}}"><button class="cart__button method__button">Mua hàng</button></a>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    <script src="{{asset('frontend/js/view.js')}}"></script>

@endsection