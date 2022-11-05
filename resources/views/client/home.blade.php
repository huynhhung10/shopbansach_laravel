@extends('indexfull_layout')
@section('client_content')
<div class="app__container">
    <div class="grid">
        <div class="row">
            <div class="col">
                <!-- slider -->
                <div class="app-container__slider">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{('./frontend/img/logo.png')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{('./frontend/img/logo.png')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{('./frontend/img/logo.png')}}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
            phân mục (mới nhất, bán chạy)
            muốn phân ra nhiều phân mục thì copy nguyên div row ra nhiều cái
         -->

       

        <div class="row">
            <div class="col">
                <div class="classify">
                    <h2 class="classify__title">
                        <p>Sách mới</p>
                    </h2>
                    <div class="classify__products">
                        <div class="row">
                            <!-- dùng bootstrap để tự nó chia đề layout ra
                                mỗi div col-3 chứa 1 sản phẩm
                                muốn có nhiều sản phẩm thì copy col-3 -->
                            <div class="col-3">
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
                            <div class="col-3">
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
                            <div class="col-3">
                                <!-- 1 sản phẩm (trong div classify__product) -->
                                <a href="productDetail.html" class="classify__linkproduct">
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
                            <div class="col-3">
                                <!-- 1 sản phẩm (trong div classify__product) -->
                                <a href="productDetail.html" class="classify__linkproduct">
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
        <div class="row">
            <div class="col">
                <div class="classify">
                    <h2 class="classify__title">
                        <p>Sách nổi bật</p>
                    </h2>
                    <div class="classify__products">
                        <div class="row">
                            <!-- dùng bootstrap để tự nó chia đề layout ra
                                mỗi div col-3 chứa 1 sản phẩm
                                muốn có nhiều sản phẩm thì copy col-3 -->
                            <div class="col-3">
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
                            <div class="col-3">
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
                            <div class="col-3">
                                <!-- 1 sản phẩm (trong div classify__product) -->
                                <a href="productDetail.html" class="classify__linkproduct">
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
                            <div class="col-3">
                                <!-- 1 sản phẩm (trong div classify__product) -->
                                <a href="productDetail.html" class="classify__linkproduct">
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

        <div class="row">
            <div class="col">
                <div class="classify">
                    <h2 class="classify__title">
                        <p>Tất cả</p>
                        <a href="">Xem thêm >></a>
                    </h2>
                    <div class="classify__products">
                        <div class="row">
                            <!-- dùng bootstrap để tự nó chia đề layout ra
                                mỗi div col-3 chứa 1 sản phẩm
                                muốn có nhiều sản phẩm thì copy col-3 -->
                            <div class="col-3">
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
                            <div class="col-3">
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
                            <div class="col-3">
                                <!-- 1 sản phẩm (trong div classify__product) -->
                                <a href="productDetail.html" class="classify__linkproduct">
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
                            <div class="col-3">
                                <!-- 1 sản phẩm (trong div classify__product) -->
                                <a href="productDetail.html" class="classify__linkproduct">
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
