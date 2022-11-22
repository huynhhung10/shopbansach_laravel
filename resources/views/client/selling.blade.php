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
                                    <a href="{{url('categorySelling/')}}" class="sidebar__link">Tất cả</a>
                                    @foreach ($categoryASC as $key => $value) 
                                    @if ($value->status == 1 )
                                        <li class="sidebar__item">
                                            <a href="{{url('category/' . $value->category_id)}}" class="sidebar__link">{{$value->category_name}}</a>
                                        </li>
                                        @endif
                                    @endforeach
                                    
                                </ul>
                            </div>
                
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="classify">
                            
                            <h2 class="classify__title">{{$cateName}}</h2>
                            <div class="classify__products">
                                <div class="row">
                                    @php
                                        $count = count($productASC6);
                                    @endphp
                                    @if ($count == 0) 
                                        <div class="col-4">
                                            <p class="classify-product__title">đang cập nhật</p>
                                        </div>
                                    @else 
                                        @foreach ($productASC6 as $key => $value) 
                                        @if ($value->status == 1 && $value->category->status == 1 && $value->brand->brand_status == 1)
                                            
                                        
                                            <div class="col-4">
                                                <!-- 1 sản phẩm (trong div classify__product) -->
                                                <a href="{{url('pDetail/' . $value->product_id)}}" class="classify__linkproduct">
                                                    <div class="classify__product">
                                                        <div class="classify-product__box"> <!-- chứa các thẻ hình -->
                                                            <img src="{{asset('/frontend/img/products')}}/{{$value->product_img}}" alt="" class="classify-product__img">
                                                            <div class="classify-product__discount">-15%</div>
                                                        </div>
                                                        <div class="classify-product__info"> <!-- chứa các thẻ thông tin -->
                                                            <p class="classify-product__title">{{$value->product_name}}</p>
                                                            <p class="classify-product__author">{{$value->product_author}}</p>
                                                            <div class="classify-product__pricebox">
                                                                <span class="classify-pricebox__lastprice">{{$value->product_price}}đ</span>
                                                                <span class="classify-pricebox__originprice">100.000đ</span>
                                                                <span class="classify-pricebox__discount">-15%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endif
                                        @endforeach
                                    @endif
                       
                                </div>
                                
                            </div>
                            
                            @if ($productASC6 instanceof \Illuminate\Pagination\LengthAwarePaginator) 
                                {{$productASC6->links('client.partials.paginating')}}
                            @endif

                            {{-- <div class="paging__container">
                                <p class="paging__box">1</p>
                                <p class="paging__box">1</p>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endsection
        <!-- END BODY -->

        <!-- FOOTER -->

        