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
                                    <a href="{{URL::to('/accountInfo')}}/{{ auth('customer')->user()->customer_id }}" class="profile-sidebar__link">
                                        Thông tin tài khoản
                                    </a>
                                </li>
                                <li class="profile-sidebar__item">
                                    <i class="profile-sidebar__icon fa-sharp fa-solid fa-rectangle-vertical-history"></i>
                                    <a href="{{URL::to('/historyOrder')}}" class="profile-sidebar__link">
                                        Lịch sử mua hàng
                                    </a>
                                </li>
                            </ul>
           
                        </div>
                    </div>
                    
                            
                            
                            
                    
                    <div class="col-9">
                        <table class="history__table">
                            <tr class="history__heading history__tr">
                               
                                <th class="history-heading__title history__td">Tên người đặt</th>
                                <th class="history-heading__title history__td">Email nhận hàng</th>
                                <th class="history-heading__title history__td">Địa chỉ</th>
                                <th class="history-heading__title history__td">	SĐT</th>
                                
                            </tr>
                            {{-- @foreach($order as $key => $ord) --}}
                            <tr class="history__item history__tr">
                       
                                <td class="history-item__content history__td">{{ $shipping->shipping_name}}</td>
                                <td class="history-item__content history__td">{{ $shipping->shipping_email}}</td>
                                <td class="history-item__content history__td">{{ $shipping->shipping_address}}</td>
                                <td class="history-item__content history__td">{{ $shipping->shipping_phone}}</td>
                               
                            </tr>
                            {{-- @endforeach --}}
                            {{-- <tr class="history__item history__tr">
                                <td class="history-item__content history__td">1</td>
                                <td class="history-item__content history__td">madohang1</td>
                                <td class="history-item__content history__td">129.000đ</td>
                                <td class="history-item__content history__td">12/12/2012</td>
                                <td class="history-item__content history__td">
                                    <a href="{{URL::to('/detailPayment')}}" class="history-item__link">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr> --}}
                          </table>


                        <div class="container__history">
                            
                            <div class="history__items history__box">
                                <!-- <div class="history__showing"> -->
                                    
                                    <div class="history__order">
                                        @foreach($order_details as $key => $details)
                                        <div class="history__item history__showing ">
                                            
                                            <div class="history-item__product history--flex4">
                                                <div class="history-item__imgbox">
                                                    <img class="history-item__img" src="{{asset('/frontend/img/products/')}}/{{$details->product->product_img}}" alt="">
                                                </div>
        
                                                <div class="history-item__info">
                                                    <h2 class="history-item__title">{{$details->product_name}}</h2>
                                                    <div class="history-item__box">
                                                        <span>Tác giả:</span>
                                                        <p class="history-item__author">{{$details->product->product_author}}</p>
                                                    </div>
                                                    <div class="history-item__box">
                                                        <span>Số lượng:</span>
                                                        <p class="history-item__type">{{$details->product_sales_quantity}}</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <p class="history-item__total">{{number_format($details->product_price*$details->product_sales_quantity ,0,',','.')}} đ</p>
                                           
                                        </div>
                                         @endforeach

                                        @foreach($order as $key => $or)
                                        <div class="history-order__totalbox">
                                            <div class="history-order__total">
                                                <span>Tổng số tiền:</span>
                                                <p class="history-total__total">{{ $or->order_total }} đ</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                    
                                    
                                <!-- </div> -->
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

@endsection