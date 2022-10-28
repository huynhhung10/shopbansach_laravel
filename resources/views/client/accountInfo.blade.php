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
                            <h2 class="account__title">Hồ sơ của tôi</h2>
                            <form action="" class="account__form">
                                <div class="account__info">
                                    <div class="account-info__group">
                                        <label for="username" class="account-info__label">Tên đăng nhập</label>
                                        <input id="username" name="username" type="text" class="account-info__input" value="hoanglong1234">
                                    </div>
                                    <div class="account-info__group">
                                        <label for="fullname" class="account-info__label">Tên</label>
                                        <input id="fullname" name="fullname" type="text" class="account-info__input" value="Châu Hoàng Long">
                                    </div>
                                    <div class="account-info__group">
                                        <label for="email" class="account-info__label">Email</label>
                                        <input id="email" name="email" type="email" class="account-info__input" value="hoanglong1234@gmail.com">
                                    </div>
                                    <div class="account-info__group">
                                        <label for="phone" class="account-info__label">Số điện thoại</label>
                                        <input id="phone" name="phone" type="text" class="account-info__input" value="*********12">
                                    </div>

                                    <div class="account-info__group">
                                        <label for="phone" class="account-info__label"><a href="{{URL::to('/accountPasswordChange')}}" class="account-info__link">Đổi mật khẩu</a></label>
                                        
                                    </div>
                                    <div class="account-info__group">
                                        <label for="phone" class="account-info__label"></label>
                                        <button class="account-info__button">Lưu</button>
                                    </div>
                                    
                                    
                                </div>
                                <div class="account__avatar">
                                    <div class="account-avatar__avtbox">
                                        <img src="{{('frontend/img/account/avt.jpg')}}" alt="" class="account-avatar__img">
                                        <input type="file" aria-label="File browser example" class="account-avatar__input" >
                                        <p class="account-avatar__p">Dung lượng file tối đa 1 MB</p>
                                        <p class="account-avatar__p">Đinh dạng JPEG, PNG</p>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection