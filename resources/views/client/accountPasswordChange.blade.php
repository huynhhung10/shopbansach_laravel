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
                                    <a href="{{URL::to('/accountInfo')}}" class="profile-sidebar__link">
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
                        <div class="container__account">
                            <h2 class="account__title">Đổi mật khẩu</h2>
                            <form action="" class="account__form">
                                <div class="account__info">
                                    <div class="account-info__group">
                                        <label for="oldpassword" class="account-info__label">Mật khẩu cũ</label>
                                        <input id="oldpassword" name="oldpassword" type="password" class="account-info__input" value="">
                                    </div>

                                    <div class="account-info__group">
                                        <label for="password" class="account-info__label">Mật khẩu mới</label>
                                        <input id="password" name="password" type="password" class="account-info__input" value="">
                                    </div>

                                    <div class="account-info__group">
                                        <label for="passwordConfirm" class="account-info__label">Nhập lại mật khẩu mới</label>
                                        <input id="passwordConfirm" name="passwordConfirm" type="password" class="account-info__input" value="">
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