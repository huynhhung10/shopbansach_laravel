@extends('index_small_layout')
@section('client_content')

        <div class="app__container">            
            <form id="form_signup" action="signup" method="POST" class="form__sign">
                <h3 class="sign__heading">Đăng ký</h3>
                <p class="sign__desc">Chào mừng đến với BookGarden</p>

                <div class="spacing"></div>

                <div class="sign__group">
                    <label for="fullname" class="sign-group__label">Tên đầy đủ</label>
                    <input id="fullname" name="fullname" type="text" class="sign-group__input" placeholder="VD: Hoàng Long">
                    <span class="sign-group__message"></span>
                </div>

                <div class="sign__group">
                    <label for="username" class="sign-group__label">Tên tài khoản</label>
                    <input id="username" name="username" type="text" class="sign-group__input" placeholder="VD: hoanglong1234">
                    <span class="sign-group__message"></span>
                </div>

                <div class="sign__group">
                    <label for="email" class="sign-group__label">Email</label>
                    <input id="email" name="email" type="email" class="sign-group__input" placeholder="VD: hoanglong@gmail.com">
                    <span class="sign-group__message"></span>
                </div>

                <div class="sign__group">
                    <label for="phone" class="sign-group__label">Số điện thoại</label>
                    <input id="phone" name="phone" type="number" class="sign-group__input" placeholder="VD: 09081234567">
                    <span class="sign-group__message"></span>
                </div>
                
                <div class="sign__group">
                    <label for="password" class="sign-group__label">Mật khẩu</label>
                    <input id="password" name="password" type="password" class="sign-group__input" placeholder="VD: Long1234">
                    <span class="sign-group__message"></span>
                </div>

                <div class="sign__group">
                    <label for="password_confirm" class="sign-group__label">Nhập lại mật khẩu</label>
                    <input id="password_confirm" name="password_confirm" type="password" class="sign-group__input" placeholder="Nhập lại mật khẩu">
                    <span class="sign-group__message"></span>
                </div>

                <button class="sign__button">Đăng ký</button>

            </form>

            <form id="form_signin" action="signup" method="POST" class="form__sign">
                <h3 class="sign__heading">Đăng nhập</h3>
                <p class="sign__desc">Chào mừng đến với BookGarden</p>

                <div class="spacing"></div>

                <div class="sign__group">
                    <label for="username" class="sign-group__label">Tên tài khoản</label>
                    <input id="username" name="username" type="text" class="sign-group__input" placeholder="VD: hoanglong1234">
                    <span class="sign-group__message"></span>
                </div>

                                
                <div class="sign__group">
                    <label for="password" class="sign-group__label">Mật khẩu</label>
                    <input id="password" name="password" type="password" class="sign-group__input" placeholder="VD: Long1234">
                    <span class="sign-group__message"></span>
                </div>
                
                <div class="sign__box">
                    <input id="remember_password" name="remember_password" class="sign-group__checkbox" type="checkbox">
                    <span class="sign-group__message sign-box__message">Ghi nhớ mật khẩu</span>
                </div>

                <button class="sign__button">Đăng nhập</button>

            </form>
        </div>
        
@endsection
