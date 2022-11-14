@extends('indexfull_layout')
@section('client_content')
<?php
                        $customer_id = Session::get('customer_id');
                        $customer_name = Session::get('customer_name');
                        $customer_username = Session::get('customer_username');
                        
                      ?>
        <div class="app__container">
            <div class="grid">
                <div class="row">
                    <div class="col-3">
                        <div class="profile__sidebar">
                            
                            <ul class="profile-sidebar__list">
                                <li class="profile-sidebar__item">
                                    <i class="profile-sidebar__icon fa-solid fa-user"></i>
                                    <a href="{{URL::to('/accountInfo')}}/<?php echo $customer_id?>" class="profile-sidebar__link">
                                        Thông tin tài khoản
                                    </a>
                                </li>
                                <li class="profile-sidebar__item">
                                    <i class="profile-sidebar__icon fa-sharp fa-solid fa-rectangle-vertical-history"></i>
                                    <a href="{{URL::to('/historyPayment')}}" class="profile-sidebar__link">
                                        Lịch sử mua hàng
                                    </a>
                                </li>
                            </ul>
           
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="container__history">
                            
                            <div class="history__items history__box">
                                <!-- <div class="history__showing"> -->
                                    <div class="history__order">
                                        <div class="history__item history__showing ">
                                            <div class="history-item__product history--flex4">
                                                <div class="history-item__imgbox">
                                                    <img class="history-item__img" src="{{('frontend/img/products/body-2-Cong-Ly-2574-1416197358.jpg')}}" alt="">
                                                </div>
        
                                                <div class="history-item__info">
                                                    <h2 class="history-item__title">Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long</h2>
                                                    <div class="history-item__box">
                                                        <span>Tác giả:</span>
                                                        <p class="history-item__author">Hoàng Long</p>
                                                    </div>
                                                    <div class="history-item__box">
                                                        <span>Số lượng:</span>
                                                        <p class="history-item__type">2</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <p class="history-item__total">102,000 đ</p>
                                        </div>
                                        <div class="history__item history__showing ">
                                            <div class="history-item__product history--flex4">
                                                <div class="history-item__imgbox">
                                                    <img class="history-item__img" src="{{('frontend/img/products/body-2-Cong-Ly-2574-1416197358.jpg')}}" alt="">
                                                </div>
        
                                                <div class="history-item__info">
                                                    <h2 class="history-item__title">Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long</h2>
                                                    <div class="history-item__box">
                                                        <span>Tác giả:</span>
                                                        <p class="history-item__author">Hoàng Long</p>
                                                    </div>
                                                    <div class="history-item__box">
                                                        <span>Số lượng:</span>
                                                        <p class="history-item__type">2</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <p class="history-item__total">102,000 đ</p>
                                        </div>
                                        
                                        <div class="history-order__totalbox">
                                            <div class="history-order__total">
                                                <span>Tổng số tiền:</span>
                                                <p class="history-total__total">204,000 đ</p>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    
                                    
                                <!-- </div> -->
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

@endsection