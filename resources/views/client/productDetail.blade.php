@extends('indexfull_layout')
@section('client_content')

<div class="app__detail">
    <div class="grid">
        <div class="detail__container">
            <form action="{{URL::to('/save-cart')}}" method="POST">
                @csrf
                <input type="hidden" value="{{asset($product->product_name)}}">
                <div class="row">
                    <div class="col-5">
                        <div class="detail__imgbox">
                            <img class="detail__img" src="{{asset('/frontend/img/products')}}/{{$product->product_img}}" alt="">
                            <input type="hidden" value="{{$product->product_img}}">
                        </div>
                    </div>

                    <div class="col">
                        <input type="hidden" value="{{$product->product_id}}" class="cart_product_name_{{$product->product_id}}">
                        <div class="detail__info">
                            <h2 class="detail-info__title">{{$product->product_name}}</h2>
                           
            
                            <div class="detail-info__box">
                                <span>Tác giả:</span>
                                <input type="hidden" value="{{$product->product_author}}">
                                <p class="detail-info__author">{{$product->product_author}}</p>
                            </div>
                            <h2 class="detail-info__lastprice">{{$product->product_price}} đ</h2>
                            <input type="hidden" value="{{$product->product_price}}">
                            <div class="detail-info__box">
                                <span>Tiết kiệm:</span>
                                <p class="detail-info__discount">18.000 đ (15%)</p>
                            </div>
                            <div class="detail-info__box">
                                <span>Giá thị trường:</span>
                                
                                <p class="detail-info__originprice">120,000 đ</p>
                            </div>
                            <div class="detail-info__box">
                                <span>Tình trạng:</span>
                                @if( $product->status == 1 )
                                <p class="detail-info__status">Còn hàng</p>
                                
                                @else
                                <p class="detail-info__status">Hết hàng</p>
                                @endif
                            </div>

                            <div class="detail-info__quantitybox">
                                <span>Số lượng:</span>
                                <input type="hidden" value="{{$product->product_quantity}}">
                                @if($product->product_quantity >= 5)
                                <div class="detail-info__quantify quantity">
                                    {{-- <button class="quantify-down quantify__down quantify__btn">-</button> --}}
                                    <input name="qty" type="number" min="1" max="5" class="quantify__num cart_product_qty_{{$product->product_id}}"  value="1" />
                                    {{-- <button class="quantify-up quantify__up quantify__btn">+</button> --}}
                                </div>
                                @else
                                <div class="detail-info__quantify quantity">
                                    {{-- <button class="quantify-down quantify__down quantify__btn">-</button> --}}
                                    <input name="qty" type="number" min="1" max="{{$product->product_quantity}}" class="cart_product_qty_{{$product->product_id}}"  value="1" />
                                    {{-- <button class="quantify-up quantify__up quantify__btn">+</button> --}}
                                </div>
                                @endif
                            </div>
                            <input name="productid_hidden" type="hidden"  value="{{$product->product_id}}" />
                            <!-- <p class="detail-info__phone">Gọi đặt hàng: <span>079 2345 8732</span> hoặc <span>089 1293 833</span></p> -->
                            @if($product->status == 1)
                            <div class="detail-info__btns">
                                {{-- <a href="{{URL::to('/cart')}}" class="detail-info__btnlink"> --}}
                                    <button class="detail-info__btn" type="submit">Thêm vào giỏ hàng</button></a>
                                {{-- <a href="{{URL::to('/payment')}}" class="detail-info__btnlink"> --}}
                                    {{-- <button class="detail-info__btn detail-info__btn--green">Thanh toán ngay</button></a> --}}
                            </div>
                           @else 
                            <div class="detail-info__btns">
                                {{-- <a href="{{URL::to('/cart')}}" class="detail-info__btnlink"> --}}
                                    <span><h2 class="detail-more__title" style="color: red">SẢN PHẨM ĐÃ HẾT HÀNG</h2></span>
                                {{-- <a href="{{URL::to('/payment')}}" class="detail-info__btnlink"> --}}
                                    {{-- <button class="detail-info__btn detail-info__btn--green">Thanh toán ngay</button></a> --}}
                            </div>
                            @endif

                            <div class="detail-info__desc">
                                <span>Mô tả:</span>
                                <p class="detail-info-desc__content">
                                    {{$product->product_content}}
                                </p>
                            </div>

                        </div>
                
                    </div>
                </div>
        </form>
        </div>

        <div class="detail__more">
            <div class="row">
                <div class="col">
                    <h2 class="detail-more__title">THÔNG TIN CHI TIẾT</h2>
                    <ul class="detail-more__list">
                        <li class="detail-more__item">
                            <span>Danh mục</span> <p class="detail-more__info">{{$product->category->category_name}}</p>
                        </li>
                        <li class="detail-more__item">
                            <span>Nhà xuất bản</span> <p class="detail-more__info">{{$product->brand->brand_name}}</p>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('frontend/js/view.js')}}"></script>


@endsection