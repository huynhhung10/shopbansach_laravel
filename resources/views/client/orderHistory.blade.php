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
                                    <a href="{{URL::to('/historyOrder')}}/{{ auth('customer')->user()->customer_id }}" class="profile-sidebar__link">
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
                                    <table class="history__table">
                                        <tr class="history__heading history__tr">
                                           
                                            <th class="history-heading__title history__td">Mã đơn hàng</th>
                                            <th class="history-heading__title history__td">Thành tiền</th>
                                            
                                            <th class="history-heading__title history__td">Ngày đặt</th>
                                            <th class="history-heading__title history__td">Trạng thái</th>
                                            <th class="history-heading__title history__td"></th>
                                        </tr>
                                        @foreach($order as $key => $ord)
                                        <tr class="history__item history__tr">
                                            <td class="history-item__content history__td">{{ $ord->order_id }}</td>
                                            <td class="history-item__content history__td">{{ $ord->order_total }}</td>
                                            
                                            <td class="history-item__content history__td">{{ $ord->created_at }}</td>  
                                            <td class="history-item__content history__td">
                                                @if($ord->order_status==1)
                                                <span style="color:darkcyan">Đơn hàng mới</span>
                                                @elseif ($ord->order_status==2)
                                                  
                                                  <span style="color:coral">Chờ xử lý</span>
                                                  
                                                  @else 
                                                  <span style="color:forestgreen">Đã xử lý</span>
                                                  @endif
                                            </td>
                                            <td class="history-item__content history__td">
                                                <a href="{{URL::to('/detailPayment')}}/{{$ord->order_id}}" class="history-item__link">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
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
                                    
                                    
                                    
                                <!-- </div> -->
                            </div>
                            
                        </div>
                        <nav aria-label="Page navigation example"  style="float:right; color:coral">
                            <div tyle=" color:coral">
                                {{$order->links()}}
                            </div>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>

@endsection