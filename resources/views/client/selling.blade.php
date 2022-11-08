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
                                    @foreach ($categoryASC as $key => $value) 
                                        <li class="sidebar__item">
                                            <a href="{{url('category/' . $value->category_id)}}" class="sidebar__link">{{$value->category_name}}</a>
                                        </li>
                                    @endforeach
                                    
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
                                    @foreach ($productASC6 as $key => $value) 
                                        <div class="col-4">
                                            <!-- 1 sản phẩm (trong div classify__product) -->
                                            <a href="{{url('pDetail/' . $value->product_id)}}" class="classify__linkproduct">
                                                <div class="classify__product">
                                                    <div class="classify-product__box"> <!-- chứa các thẻ hình -->
                                                        <img src="{{asset($value->product_img)}}" alt="" class="classify-product__img">
                                                        <div class="classify-product__discount">-15%</div>
                                                    </div>
                                                    <div class="classify-product__info"> <!-- chứa các thẻ thông tin -->
                                                        <p class="classify-product__title">{{$value->product_name}}</p>
                                                        <p class="classify-product__author">{{$value->product_author}}</p>
                                                        <div class="classify-product__pricebox">
                                                            <span class="classify-pricebox__lastprice">85.000đ</span>
                                                            <span class="classify-pricebox__originprice">{{$value->product_price}}đ</span>
                                                            <span class="classify-pricebox__discount">-15%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                       
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

        