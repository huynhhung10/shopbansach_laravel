@extends('indexfull_layout')
@section('client_content')

<div class="app__detail">
    <div class="grid">
        <div class="detail__container">
            <div class="row">
                <div class="col-5">
                    <div class="detail__imgbox">
                        <img class="detail__img" src="{{('frontend/img/products/bia-sach-hoc-vien-thiet-ke-viettamduc02.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="detail__info">
                        <h2 class="detail-info__title">Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long</h2>
                        <div class="detail-info__box">
                            <span>Tác giả:</span>
                            <p class="detail-info__author">Hoàng Long</p>
                        </div>
                        <h2 class="detail-info__lastprice">102,000 đ</h2>
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
                            <p class="detail-info__status">Sắp có hàng</p>
                        </div>

                        <div class="detail-info__quantitybox">
                            <span>Số lượng:</span>
                            <div class="detail-info__quantify">
                                <button class="quantify__down quantify__btn">-</button>
                                <p class="quantify__num">1</p>
                                <button class="quantify__up quantify__btn">+</button>
                            </div>
                        </div>

                        <!-- <p class="detail-info__phone">Gọi đặt hàng: <span>079 2345 8732</span> hoặc <span>089 1293 833</span></p> -->
                        
                        <div class="detail-info__btns">
                            <a href="{{URL::to('/cart')}}" class="detail-info__btnlink"><button class="detail-info__btn">Thêm vào giỏ hàng</button></a>
                            <a href="{{URL::to('/payment')}}" class="detail-info__btnlink"><button class="detail-info__btn detail-info__btn--green">Thanh toán ngay</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="detail__more">
            <div class="row">
                <div class="col">
                    <h2 class="detail-more__title">THÔNG TIN CHI TIẾT</h2>
                    <ul class="detail-more__list">
                        <li class="detail-more__item">
                            <span>Danh mục</span> <p class="detail-more__info">Sách gì đó đó</p>
                        </li>
                        <li class="detail-more__item">
                            <span>Danh mục</span> <p class="detail-more__info">Sách gì đó đó</p>
                        </li>
                        <li class="detail-more__item">
                            <span>Danh mục</span> <p class="detail-more__info">Sách gì đó đó</p>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection