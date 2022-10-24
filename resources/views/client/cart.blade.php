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
                            <div class="cart__items cart__box">
                                <!-- <div class="cart__showing"> -->
                                    <div class="cart__item cart__showing ">
                                        <div class="cart-item__product cart--flex4">
                                            <div class="cart-item__imgbox">
                                                <img class="cart-item__img" src="{{('frontend/img/products/body-2-Cong-Ly-2574-1416197358.jpg')}}" alt="">
                                            </div>
    
                                            <div class="cart-item__info">
                                                <h2 class="cart-item__title">Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long</h2>
                                                <div class="cart-item__box">
                                                    <span>Tác giả:</span>
                                                    <p class="cart-item__author">Hoàng Long</p>
                                                </div>
                                                <div class="cart-item__box">
                                                    <span>Loại:</span>
                                                    <p class="cart-item__type">Sách</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item__price cart--flex3">
                                            <p class="cart-item__lastprice">102,000 đ</p>
                                            <p class="cart-item__originprice">120,000 đ</p>
                                        </div>
                                        <div class="cart-item__quantity cart--flex2 quantity">
                                            <button class="quantify-down cart-item__down cart-item__btn">-</button>
                                            <p class="quantify-num cart-item__num">1</p>
                                            <button class="quantify-up cart-item__up cart-item__btn">+</button>
                                        </div>
                                        <p class="cart-item__total cart--flex2">102,000 đ</p>
                                        <i class="cart-item__icon fa-regular fa-trash"></i>

                                    </div>
                                    
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="cart__payment">
                            <div class="cart__promotion cart__box">
                                <h2 class="cart-promotion__title">BookGarden Khuyến mãi</h2>
                                <div class="cart-promotion__selection">
                                    <select name="" id="" class="cart-promotion__select">
                                        <option value="0" class="cart-promotion__option">-- Chọn mã khuyến mãi --</option>
                                        <option value="1" class="cart-promotion__option">KM1</option>
                                        <option value="2" class="cart-promotion__option">KM2</option>
                                        <option value="3" class="cart-promotion__option">KM3</option>
                                    </select>
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
                                <a href="{{URL::to('/payment')}}"><button class="cart__button">Mua hàng</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection