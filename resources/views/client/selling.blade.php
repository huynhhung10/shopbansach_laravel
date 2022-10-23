@extends('indexfull_layout')
@section('client_content')

        <div class="app__container">
            <div class="grid">
                <div class="row">
                    <div class="col-3">
                        <div class="container__sidebar">
                            <div class="sidebar__box">
                                <h2 class="sidebar__title classify__title">Side bar</h2>
                                <ul class="sidebar__list">
                                    <li class="sidebar__item">
                                        <a href="{{URL::to('/selling')}}" class="sidebar__link">Truyện tranh</a>
                                    </li>
                                    <li class="sidebar__item">
                                        <a href="{{URL::to('/selling')}}" class="sidebar__link">Flashcard, thẻ học online</a>
                                    </li>
                                    <li class="sidebar__item">
                                        <a href="" class="sidebar__link">Truyện tranh</a>
                                    </li>
                                    <li class="sidebar__item">
                                        <a href="" class="sidebar__link">Flashcard, thẻ học online</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__box">
                                <h2 class="sidebar__title classify__title">Side bar</h2>
                                <ul class="sidebar__list">
                                    <li class="sidebar__item">
                                        <a href="" class="sidebar__link">Truyện tranh</a>
                                    </li>
                                    <li class="sidebar__item">
                                        <a href="" class="sidebar__link">Flashcard, thẻ học online</a>
                                    </li>
                                    <li class="sidebar__item">
                                        <a href="" class="sidebar__link">Truyện tranh</a>
                                    </li>
                                    <li class="sidebar__item">
                                        <a href="" class="sidebar__link">Flashcard, thẻ học online</a>
                                    </li>
                                </ul>
                            </div>
                            
                            
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="classify">
                            <h2 class="classify__title">Sách mới</h2>
                            <div class="classify__products">
                                <div class="row">
                                    <!-- dùng bootstrap để tự nó chia đề layout ra
                                        mỗi div col-3 chứa 1 sản phẩm
                                        muốn có nhiều sản phẩm thì copy col-3 -->
                                    <div class="col-4">
                                        <!-- 1 sản phẩm (trong div classify__product) -->
                                        <a href="{{URL::to('/pDetail')}}" class="classify__linkproduct">
                                            <div class="classify__product">
                                                <div class="classify-product__box"> <!-- chứa các thẻ hình -->
                                                    <img src="{{('./frontend/img/products/1 (3).jpg')}}" alt="" class="classify-product__img">
                                                    <div class="classify-product__discount">-15%</div>
                                                </div>
                                                <div class="classify-product__info"> <!-- chứa các thẻ thông tin -->
                                                    <p class="classify-product__title">Sự tích bánh chưng bánh dày</p>
                                                    <p class="classify-product__author">Hoàng Long</p>
                                                    <div class="classify-product__pricebox">
                                                        <span class="classify-pricebox__lastprice">85.000đ</span>
                                                        <span class="classify-pricebox__originprice">100.000đ</span>
                                                        <span class="classify-pricebox__discount">-15%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <!-- 1 sản phẩm (trong div classify__product) -->
                                        <a href="{{URL::to('/pDetail')}}" class="classify__linkproduct">
                                            <div class="classify__product">
                                                <div class="classify-product__box"> <!-- chứa các thẻ hình -->
                                                    <img src="{{('./frontend/img/products/1 (3).jpg')}}" alt="" class="classify-product__img">
                                                    <div class="classify-product__discount">-15%</div>
                                                </div>
                                                <div class="classify-product__info"> <!-- chứa các thẻ thông tin -->
                                                    <p class="classify-product__title">Sự tích bánh chưng bánh dày</p>
                                                    <p class="classify-product__author">Hoàng Long</p>
                                                    <div class="classify-product__pricebox">
                                                        <span class="classify-pricebox__lastprice">85.000đ</span>
                                                        <span class="classify-pricebox__originprice">100.000đ</span>
                                                        <span class="classify-pricebox__discount">-15%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endsection
        <!-- END BODY -->

        <!-- FOOTER -->

        