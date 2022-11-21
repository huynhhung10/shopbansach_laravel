@extends('indexfull_layout')
@section('client_content')

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
                        <div class="container__account">
                            <h2 class="account__title">Đổi mật khẩu</h2>
                            <form action="{{ URL::to('/savechangepassword') }}" method="post" class="account__form">
                                @csrf
                                <div class="account__info">
                                    <input type="hidden" value="{{$customer->customer_id}}" name="customer_id">
                                    {{-- <div class="account-info__group">
                                        <label for="oldpassword" class="account-info__label">Mật khẩu cũ</label>
                                        <input id="oldpassword" name="password" type="password" class="account-info__input" value="">
                                        {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                                    </div> --}}

                                    <div class="account-info__group">
                                        <label for="password" class="account-info__label">Mật khẩu mới</label>
                                        <input id="password" name="new_password" type="password" class="account-info__input" value="">
                                        {!! $errors->first('new_password', '<small class="text-danger">:message</small>') !!}
                                    </div>
                                    
                                    <div class="account-info__group">
                                        <label for="passwordConfirm" class="account-info__label">Nhập lại mật khẩu mới</label>
                                        <input id="passwordConfirm" name="new_passwordConfirm" type="password" class="account-info__input" value="">
                                        {!! $errors->first('new_passwordConfirm', '<small class="text-danger">:message</small>') !!}
                                    </div>
                                    
                                    <div class="account-info__group">
                                        <label for="phone" class="account-info__label"></label>
                                        <button class="account-info__button">Lưu</button>
                                    </div>
                                    
                                    
                                </div>
                                <div class="account__avatar">
                                    <div class="account-avatar__avtbox">
                                        

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection