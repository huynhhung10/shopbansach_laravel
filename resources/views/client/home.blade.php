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
                            <img src="{{('./frontend/img/slider/alo3.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{('./frontend/img/slider/alo4.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{('./frontend/img/slider/sach-moi-tu-nguyen.jpg')}}" class="d-block w-100" alt="...">
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
                            @foreach ($productASC4 as $key => $value)
                            @if ($value->status == 1 && $value->category->status == 1 && $value->brand->brand_status == 1) 
                                <div class="col-3">
                                    <!-- 1 sản phẩm (trong div classify__product) -->
                                    <a href="{{url('pDetail/' . $value->product_id)}}" class="classify__linkproduct">
                                        <div class="classify__product">
                                            <div class="classify-product__box"> <!-- chứa các thẻ hình -->
                                                <img src="{{asset('/frontend/img/products')}}/{{$value->product_img}}" alt="" class="classify-product__img">
                                            </div>
                                            <div class="classify-product__info"> <!-- chứa các thẻ thông tin -->
                                                <p class="classify-product__title">{{$value->product_name}}</p>
                                                <p class="classify-product__author">{{$value->product_author}}</p>
                                                <div class="classify-product__pricebox">
                                                    <span class="classify-pricebox__lastprice">{{$value->product_price}}đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                            
                            
                            
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
                            @foreach ($productDESC4 as $key => $value) 
                            @if ($value->status == 1 && $value->product_featured==1 && $value->category->status == 1 && $value->brand->brand_status == 1)
                                
                           
                            <div class="col-3">
                                <!-- 1 sản phẩm (trong div classify__product) -->
                                <a href="{{url('pDetail/' . $value->product_id)}}" class="classify__linkproduct">
                                    <div class="classify__product">
                                        <div class="classify-product__box"> <!-- chứa các thẻ hình -->
                                            <img src="{{asset('/frontend/img/products')}}/{{$value->product_img}}" alt="" class="classify-product__img">
                                        </div>
                                        <div class="classify-product__info"> <!-- chứa các thẻ thông tin -->
                                            <p class="classify-product__title">{{$value->product_name}}</p>
                                            <p class="classify-product__author">{{$value->product_author}}</p>
                                            <div class="classify-product__pricebox">
                                                <span class="classify-pricebox__lastprice">{{$value->product_price}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                            
                            
                            
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
                        <a href="{{url('/categorySelling')}}" class="">Xem thêm >> </a>
                    </h2>
                    <div class="classify__products">
                        <div class="row">
                            <!-- dùng bootstrap để tự nó chia đề layout ra
                                mỗi div col-3 chứa 1 sản phẩm
                                muốn có nhiều sản phẩm thì copy col-3 -->
                            @foreach ($productASC8 as $key => $value) 
                            @if ($value->status == 1 && $value->category->status == 1 && $value->brand->brand_status == 1)
                                <div class="col-3">
                                    <!-- 1 sản phẩm (trong div classify__product) -->
                                    <a href="{{url('pDetail/' . $value->product_id)}}" class="classify__linkproduct">
                                        <div class="classify__product">
                                            <div class="classify-product__box"> <!-- chứa các thẻ hình -->
                                                <img src="{{asset('/frontend/img/products')}}/{{$value->product_img}}" alt="" class="classify-product__img">
                                            </div>
                                            <div class="classify-product__info"> <!-- chứa các thẻ thông tin -->
                                                <p class="classify-product__title">{{$value->product_name}}</p>
                                                <p class="classify-product__author">{{$value->product_author}}</p>
                                                <div class="classify-product__pricebox">
                                                    <span class="classify-pricebox__lastprice">{{$value->product_price}}đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            @endforeach
         
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
       

    </div>
</div>
@endsection
