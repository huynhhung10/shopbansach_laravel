@extends('indexfull_layout')
@section('client_content')

        <div class="app__container">
            <div class="grid">
                <div class="row">
                    <div class="col-9">
                        <div class="container__cart">
                            
                            <div class="cart__items cart__box payment-check__container">
                                @php
                                    $fullname = $_GET['shipping_name'];
                                    $email = $_GET['shipping_email'];
                                    $addr = $_GET['shipping_address'];
                                    $phone = $_GET['shipping_phone'];
                                @endphp
                                <h3 class="pay__heading payment-check__heading">Thông tin giao hàng</h3>
                
                                <div class="pay__group payment-check__group">
                                    <label for="fullname" class="pay-group__label">Họ tên</label>
                                    <p class="pay-group__input ">{{$fullname}}</p>
                                </div>
                
                                                
                                <div class="pay__group payment-check__group">
                                    <label for="email" class="pay-group__label">Email nhận hàng</label>
                                    <p class="pay-group__input">{{$email}}</p>
                                </div>
                
                                <div class="pay__group payment-check__group">
                                    <label for="address" class="pay-group__label">Địa chỉ</label>
                                    <p  class="pay-group__input">{{$addr}}</p>
                                </div>
                
                                <div class="pay__group payment-check__group">
                                    <label for="phone" class="pay-group__label">Số điện thoại</label>
                                    <p  class="pay-group__input" >{{$phone}}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-3">
                        <form action="successpayment">
                            <div class="cart__payment">
                                <div class="cart__promotion cart__box cart__payment-method">
                                    <h2 class="cart-promotion__title payment-method__title">Phương thức thanh toán</h2>
                                    <div class="cart-promotion__box">
                                        <div class="promotion__group">
                                            <input type="radio" id="vat" name="payment_method" value="1">
                                            <label for="vat">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="promotion__group">
                                            <input type="radio" id="card" name="payment_method" value="2">
                                            <label for="card">Thanh toán bằng thẻ</label>
                                        </div>
                                        <div class="promotion__group">
                                            <input type="radio" id="digi" name="payment_method" value="3">
                                            <label for="digi">Thanh toán bằng ví điện tử</label>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="cart__prices cart__box">
                                    <div class="cart-prices__box">
                                        <span>Tạm tính</span>
                                        <p class="cart-prices__before">102,000 đ</p>
                                    </div>

                                    <div class="cart-prices__box">
                                        <span>Tổng tiền</span>
                                        <p class="cart-prices__after">102,000 đ</p>
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